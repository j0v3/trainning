<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
   //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   
    $mail->isSMTP();                                            
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                    
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '20383aa7856c02';                     //SMTP username
    $mail->Password   = '11ab535cfbee5d';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = "587";                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('to@example.com ', 'Mailer');
    $mail->addAddress('to@example.com', 'Joe User');

    $mail->CharSet = PHPMailer::CHARSET_UTF8;

   // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>