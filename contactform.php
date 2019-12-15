<?php
if (isset($_POST['submit'])) {
    $name = $_POST['your-name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['your-e-mail'];
    $message = $_POST['your-message'];

//     use PHPMailer\PHPMailer\PHPMailer;
//     // use PHPMailer\PHPMailer\SMTP;
//     use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require 'vendor/autoload.php';

// // Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
   

//     //Recipients
//     $mail->setFrom('erikjames69@hotmail.com', 'Mailer');
//     $mail->addAddress( $mailFrom, $name);     // Add a recipient
    

//     $body = "<h3>Hello</h3>You have recieved and email from " . $name . "<br> The message is: " . $message . " <br>Their email is: " . $mailFrom;

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Website form  from ' . $name;
//     $mail->Body    = $body;
//     $mail->AltBody = strip_tags($body);

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

    $mailTo = "info@rrspark.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an e-mail from ".$name .".\n\n" .$message;

    mail($mailTo, $subject, $txt, $headers);
    // $mail->send();
        echo 'Message has been sent';
    // header("Location: success.php?mailsent");
    header("Location: http://rrspark.com/zitalk1/");

}


?>