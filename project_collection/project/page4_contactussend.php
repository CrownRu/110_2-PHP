<?php
$message=$_POST["mytext"];
$message=nl2br($message);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\xampp\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\xampp\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\xampp\PHPMailer\src\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1093358@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = 'aa764935801';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;
    $mail->SMTPSecure = 'ssl';                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('a1093358@mail.nuk.edu.tw', $_COOKIE["account"]);
    $mail->addAddress('a1093356@mail.nuk.edu.tw', 'Ru');     //Add a recipient
    //$mail->addAddress('a1093350@mail.nuk.edu.tw', 'smu u');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "=?utf-8?B?".base64_encode("意見反應")."?=";
    $message="我有話要說:<br>".$message."<br>";
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header('Location: page4_contactus.php');
?>