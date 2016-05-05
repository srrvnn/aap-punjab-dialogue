<?php

require_once __DIR__ . '/../vendor/autoload.php';

class ContactUsResponse {

    public $status = "InvalidParameters";
	public $message = "Required parameters are not passed or empty";
	public $messageId = "2";
}

error_log("Will attempt to send email");

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
$mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
$mail->Mailer = "smtp";
$mail->Username = "punjabdialoguefeedback@gmail.com";                 // SMTP username
$mail->Password = "punjabdialoguefeedback123";                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->From = 'punjabdialoguefeedback@gmail.com';
$mail->FromName = 'Arvind Kejriwal (On Behalf of the Punjab Dialogue Team)';
$mail->addCC('aappunjabdialogue@gmail.com');

$secret = '6LfDHR4TAAAAAEO7WlESvnf4_5Vdccwfirg514Yw';

$response = new ContactUsResponse();
$is_debug = isset($_GET['q121_aap_dd_debug_counter']);

// Your code here to handle a successful verification
// Checking for blank Fields..
if (!isset($_POST["name"]) || empty($_POST["name"]) || !isset($_POST["email"]) || empty($_POST["email"])) {

    echo json_encode($response);

} else {

	// Check if the "Sender's Email" input field is filled out
    $email = $_POST['email'];

    // Sanitize e-mail address
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail address
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (!$email) {

        $response->status = "ValidationError";
		$response->message = "Email is invalid!";
        echo json_encode($response);

    } else {

        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
		$capchaResponse = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		if ($is_debug) {

			echo "verify_capcha_status = ".var_dump($capchaResponse);
		}

		if (!$capchaResponse->isSuccess()) {

			echo json_encode($capchaResponse);
			return;
		}

        $name = $_POST['name'];
        $message = $_POST['message'];

  //       // message lines should not exceed 70 characters (PHP rule), so wrap it
  //       $url = 'https://api.parse.com/1/classes/contactus';
  //       $appId = 'yVjYjEx1SN7YTAkALF07teCzVeG906SnADSlrSEa';
  //       $restKey = 'pGaZrwDkhm0A31dziZMWtTi6ip8C8IbtgQHdoCgd';
  //       $headers = array(
  //           "Content-Type: application/json",
  //           "X-Parse-Application-Id: " . $appId,
  //           "X-Parse-REST-API-Key: " . $restKey
  //       );
		// // TODO:: Need to check parse response, add metrics and return appropriate error on failure
  //       $objectData = "{\"email\":\"$email\", \"name\":\"$name\", \"message\":\"$message\"}";
  //       $rest = curl_init();
  //       curl_setopt($rest, CURLOPT_URL, $url);
  //       curl_setopt($rest, CURLOPT_POST, 1);
  //       curl_setopt($rest, CURLOPT_POSTFIELDS, $objectData);
  //       curl_setopt($rest, CURLOPT_HTTPHEADER, $headers);
  //       curl_setopt($rest, CURLOPT_SSL_VERIFYPEER, false);
  //       curl_setopt($rest, CURLOPT_RETURNTRANSFER, true);
  //       $res = curl_exec($rest);
  //       curl_close($rest);

        // Send mail by PHP Mail Function
        $mail->addAddress("$email", "$name");
        $mail->Subject = 'Welcome to Punjab Dialogue';

        $mail->Body = "Dear $name,\n\n Thank you for writing to the team at Delhi Dialogue. We appreciate your feedback and inputs. The strong secretariat at Delhi Dialogue will have a look at your suggestions and surely keep them in mind whilst thinking of Delhi's future.
        \nDelhi Dialogue is an initiative of the Aam Aadmi Party that presents a concrete, sustainable and futuristic roadmap to make Delhi a world-class city. It seeks to conduct a comprehensive study of the intractable problems that plague Delhi and take stock of the aspirations of its citizens. Invitations will be sent to domain experts, researchers, scientists, national and international experts from governments,  organizations, businesses and civil society to engage with us on a 30-point agenda themed under 12 focus areas, whilst catering to the needs, wants and desires of Delhi's youth, women, traders, middle class living in group housing societies, RWAs, JJ Clusters, other housing colonies and villages. This will be then used to create a concrete, feasible and long-term roadmap and vision to make Delhi a smart but liveable city.
        \nFeel free to write in to us at delhidialogue@aamaadmiparty.org or whatsapp us at +919643327265 or visit our website to track progress at http://delhidialogue.in/index.html
        \nYou can also follow us on Twitter > https://twitter.com/DelhiDialogue or Facebook > https://www.facebook.com/pages/Delhi-Dialogue/576718279124066?ref=br_tf as well!
        \n We look forward to continuing this process of Dialogue with you. Keep in touch!
        \nYours sincerely,\nArvind Kejriwal\n(On Behalf of the Delhi Dialogue Team)";

        $mail->AltBody = '';

        if (!$mail->send()) {

            $response->message = "Mail could not be sent!";
			$response->messageId = "10";
			$response->status = "MailingError";

        } else {

			$response->message = "Email was sent successfully!";
			$response->messageId = "3";
			$response->status = "Completed";
        }

        echo json_encode($response);
    }
}

?>