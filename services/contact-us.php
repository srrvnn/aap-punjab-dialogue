<?php

require_once __DIR__ . '/../vendor/autoload.php';

class ContactUsResponse {
    public $status = "InvalidParameters";
    public $message = "Required parameters are not passed or empty";
    public $messageId = "2";
}

$mail = new PHPMailer;

$mail->isSMTP();                                       // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = "punjabdialoguefeedback@gmail.com";   // SMTP username
$mail->Password = "punjabdialoguefeedback123";                    // SMTP password
$mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                     // TCP port to connect to
$mail->isHTML(true);                                   // Set email format to HTML

$mail->setFrom('punjabdialoguefeedback@gmail.com', 'Arvind Kejriwal (On Behalf of the Punjab Dialogue Team)');
$mail->addReplyTo('aappunjabdialogue@gmail.com', 'AAP Punjab Dialogue');
// $mail->addCC('aappunjabdialogue@gmail.com');
$mail->addBCC('srrvnn@live.com');

$response = new ContactUsResponse();

// Your code here to handle a successful verification
// Checking for blank Fields..
if (!isset($_POST["name"]) || empty($_POST["name"]) || !isset($_POST["email"]) || empty($_POST["email"])) {

    echo json_encode($response);

} else {

    $name = $_POST['name'];
    $message = $_POST['message'];

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

        $recaptcha = new \ReCaptcha\ReCaptcha('6LfDHR4TAAAAAEO7WlESvnf4_5Vdccwfirg514Yw');
        $capchaResponse = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$capchaResponse->isSuccess()) {

            echo json_encode($capchaResponse);
            return;
        }

        // Send mail by PHP Mail Function
        $mail->addAddress("$email", "$name");

        $mail->Subject = 'Welcome to Punjab Dialogue';
        $mail->Body = "Dear $name,\n\n Thank you for writing to the team at Punjab Dialogue. We appreciate your feedback and inputs. The strong secretariat at Punjab Dialogue will have a look at your suggestions and surely keep them in mind whilst thinking of Punjab's future.

            \nPunjab Dialogue is an initiative of the Aam Aadmi Party that presents a concrete, sustainable and futuristic roadmap to make Punjab a world-class state. It seeks to conduct a comprehensive study of the intractable problems that plague Punjab and take stock of the aspirations of its citizens. Invitations will be sent to domain experts, researchers, scientists, national and international experts from governments,  organizations, businesses and civil society to engage with us on a 30-point agenda themed under 12 focus areas, whilst catering to the needs, wants and desires of Punjab's youth, women, traders, middle class living in group housing societies, RWAs, JJ Clusters, other housing colonies and villages. This will be then used to create a concrete, feasible and long-term roadmap and vision to make Punjab a smart and liveable state.
            \nFeel free to write in to us at aappunjabdialogue@gmail.com or WhatsApp us at +919643327265 or visit our website to track progress at http://punjabdialogue.org
            \nYou can also follow us on Twitter > https://twitter.com/pbdialogue or Facebook > https://www.facebook.com/punjabdialogue as well!
            \n We look forward to continuing this process of Dialogue with you. Keep in touch!
            \nYours sincerely,\nArvind Kejriwal\n(On Behalf of the Punjab Dialogue Team) <hr/> $message";

        $mail->AltBody = '';

        if (!$mail->send()) {

            error_log("Mail sending unsuccessful.');

            $response->message = "Mail could not be sent!";
            $response->messageId = "10";
            $response->status = "MailingError";

        } else {

            error_log("Mail sending successful.");

            $response->message = "Email was sent successfully!";
            $response->messageId = "3";
            $response->status = "Completed";
        }

        echo json_encode($response);
    }
}

?>