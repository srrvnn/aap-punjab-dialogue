<?php
class ParticipateResponse {
    public $status = "InvalidParameters";
	public $message = "Required parameters are not passed or empty";
	public $messageId = "2";
}

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
$mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
$mail->Mailer = "smtp";
$mail->Username = "team@delhidialogue.co.in";                 // SMTP username
$mail->Password = "AAP@tech";                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->From = 'team@delhidialogue.co.in';
$mail->FromName = 'Arvind Kejriwal (On Behalf of the Delhi Dialogue Team)';
$mail->addCC('team@delhidialogue.co.in');

$response = new ParticipateResponse();
$is_debug = isset($_GET['q121_aap_dd_debug_counter']);
//Checking for blank Fields..
    if(!isset($_POST["participationOption"]) || empty($_POST["participationOption"])){
        echo json_encode($response);
    } else{
        $participationOption = $_POST["participationOption"];
 
		// Check if the "Sender's Email" input field is filled out
        $name=$_POST['name'];
        $email =$_POST['email'];
        $phone = $_POST['phone'];
        $profession = $_POST['profession'];
		$orgType = $_POST['orgType'];
        $message = $_POST['message'];
        $focusArea="";
		
		// Use __ as separator to store Focus areas
		if(isset($_POST['focusArea']) && !empty($_POST['focusArea'])) {
			$focusArea = join("__", $_POST['focusArea']);
		}
        // Sanitize e-mail address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$email){
            $response->message = "Email is invalid!";
			$response->messageId = "1";
			$response->status = "ValidationError";
            echo json_encode($response);
        }
        else{
			require_once('verify-capcha.php');
			$capchaResponse = verify_capcha($_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"], $is_debug);
			if($is_debug) {
				echo "verify_capcha_status = ".var_dump($capchaResponse);
			}
			if($capchaResponse->status !== "ValidCapcha") {
				echo json_encode($capchaResponse);
				return;
			}
            // message lines should not exceed 70 characters (PHP rule), so wrap it
            $url = 'https://api.parse.com/1/classes/submission';
            $appId = 'yVjYjEx1SN7YTAkALF07teCzVeG906SnADSlrSEa';
            $restKey = 'pGaZrwDkhm0A31dziZMWtTi6ip8C8IbtgQHdoCgd';
            $headers = array(
                "Content-Type: application/json",
                "X-Parse-Application-Id: " . $appId,
                "X-Parse-REST-API-Key: " . $restKey
            );
            $objectData = "{\"email\":\"$email\", \"name\":\"$name\", \"phone\":\"$phone\", \"profession\":\"$profession\",\"participationOption\":\"$participationOption\",  \"orgType\":\"$orgType\", \"message\":\"$message\",\"topics\":\"$focusArea\"}";

            $rest = curl_init();
            curl_setopt($rest,CURLOPT_URL,$url);
            curl_setopt($rest,CURLOPT_POST,1);
            curl_setopt($rest,CURLOPT_POSTFIELDS,$objectData);
            curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);
            curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($rest);

            curl_close($rest);
            // Send mail by PHP Mail Function
            $mail->addAddress("$email", "$name");     // Add a recipient
            $mail->Subject = 'Welcome to Delhi Dialogue';
            $mail->Body = "Dear $name,\n\n Thank you for writing to the team at Delhi Dialogue. We appreciate your feedback and inputs. The strong secretariat at Delhi Dialogue will have a look at your suggestions and surely keep them in mind whilst thinking of Delhi's future.
            \nDelhi Dialogue is an initiative of the Aam Aadmi Party that presents a concrete, sustainable and futuristic roadmap to make Delhi a world-class city. It seeks to conduct a comprehensive study of the intractable problems that plague Delhi and take stock of the aspirations of its citizens. Invitations will be sent to domain experts, researchers, scientists, national and international experts from governments,  organizations, businesses and civil society to engage with us on a 30-point agenda themed under 12 focus areas, whilst catering to the needs, wants and desires of Delhi's youth, women, traders, middle class living in group housing societies, RWAs, JJ Clusters, other housing colonies and villages. This will be then used to create a concrete, feasible and long-term roadmap and vision to make Delhi a smart but liveable city.
            \nFeel free to write in to us at delhidialogue@aamaadmiparty.org or whatsapp us at +919643327265 or visit our website to track progress at http://delhidialogue.in/index.html
            \nYou can also follow us on Twitter > https://twitter.com/DelhiDialogue or Facebook > https://www.facebook.com/pages/Delhi-Dialogue/576718279124066?ref=br_tf as well!
            \n We look forward to continuing this process of Dialogue with you. Keep in touch!
            \nYours sincerely,\nArvind Kejriwal\n(On Behalf of the Delhi Dialogue Team)";
            $mail->AltBody = '';
            if (!$mail->send()) {
                $response->message = "Record Updated. Message could not be sent.";
                $response->messageId = "4";
                $response->status = "MailingError";
            } else {
				$response->message = "Record updated. Message sent.";
                $response->messageId = "3";
                $response->status = "Completed";
            }
            echo json_encode($response);
        }
    }
?>