<?php
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require $PATH . 'vendor/autoload.php';



function sendEmail($reciever, $receiverName, $subject, $message)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'eatfishnl@gmail.com';

    global $PATH;
    $file = fopen($PATH . 'php/password.php', 'r');
    while (!feof($file)) {
        $line = fgets($file);
    }
    $password = $line;
    $mail->Password = $password;
    fclose($file);
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('eatfishnl@gmail.com', 'Eat Fish Restaurant');
    $mail->addAddress($reciever, $receiverName);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
}


