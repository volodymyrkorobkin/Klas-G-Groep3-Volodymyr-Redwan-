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
    $mail->Password = file_get_contents($PATH . 'php/password.txt');
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('eatfishnl@gmail.com', 'Eat Fish Restaurant');
    $mail->addAddress($reciever, $receiverName);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
}


