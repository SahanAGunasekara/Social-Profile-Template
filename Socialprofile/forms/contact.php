<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

if (empty($name)) {
    echo "Please enter your Name.";
} else if (empty($email)) {
    echo "Please enter your Email Address.";
} else if (strlen($email) > 100) {
    echo "Incorrect Email Address.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Not a valid Email Address.";
} else if (empty($subject)) {
    echo "Please enter your Subject.";
} else if (empty($message)) {
    echo "Please enter your Message.";
} else {

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example@gmail.com';
        $mail->Password   = 'wret ghry iksh xbzn'; // Google App Password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('example@gmail.com', 'Portfolio Contact');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('example@gmail.com', 'Alan Smith');

        $mail->isHTML(true);
        $mail->Subject = $subject; //  Plain text
        $mail->Body    = "<h3>Message from $name ($email)</h3><p>$message</p>";

        $mail->send();
        echo 'Message has been sent successfully.';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
