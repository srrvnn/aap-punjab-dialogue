<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
$mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
$mail->Mailer = "smtp";
$mail->Username = "delhidialog1@gmail.com";                 // SMTP username
$mail->Password = "AAP@tech";                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->From = 'delhidialog1@gmail.com';
$mail->FromName = 'Arvind Kejriwal (On Behalf of the Delhi Dialogue Team)';
$mail->addCC('delhidialog1@gmail.com');


    // Your code here to handle a successful verification
//Checking for blank Fields..
    if ($_POST["name"] == "" || $_POST["email"] == "") {
        $output = array(
            "message" => "Fields can not be empty",
            "messageId" => "2",
            "status" => "ValidationError"
        );
        echo json_encode($output);
    } else {
// Check if the "Sender's Email" input field is filled out
        $email = $_POST['email'];

        // Sanitize e-mail address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail address
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$email) {
            $output = array(
                "message" => "Email is invalid!",
                "messageId" => "1",
                "status" => "ValidationError"
            );
            echo json_encode($output);
        } else {
            $name = $_POST['name'];
            $message = $_POST['message'];

            // message lines should not exceed 70 characters (PHP rule), so wrap it
            $url = 'https://api.parse.com/1/classes/contactus';
            $appId = 'yVjYjEx1SN7YTAkALF07teCzVeG906SnADSlrSEa';
            $restKey = 'pGaZrwDkhm0A31dziZMWtTi6ip8C8IbtgQHdoCgd';
            $headers = array(
                "Content-Type: application/json",
                "X-Parse-Application-Id: " . $appId,
                "X-Parse-REST-API-Key: " . $restKey
            );
            $objectData = "{\"email\":\"$email\", \"name\":\"$name\", \"message\":\"$message\"}";
            $rest = curl_init();
            curl_setopt($rest, CURLOPT_URL, $url);
            curl_setopt($rest, CURLOPT_POST, 1);
            curl_setopt($rest, CURLOPT_POSTFIELDS, $objectData);
            curl_setopt($rest, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($rest, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($rest, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($rest);
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
                $output = array(
                    "message" => "Message could not be sent!",
                    "messageId" => "10",
                    "status" => "MailingError");
            } else {
                $output = array(
                    "message" => "Email was sent successfully!",
                    "messageId" => "3",
                    "status" => "Completed");
            }
            echo json_encode($output);
        }
    }
?>