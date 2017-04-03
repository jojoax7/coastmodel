<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'managerfashion.com';  // Specify main and backup SMTP servers
$mail->Host = 'mail.wantedmodelmanagement.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'wantedbang@managerfashion.com';                 // SMTP username
$mail->Username = 'webmaster@wantedmodelmanagement.com';                 // SMTP username
// $mail->Password = '6tP&fc05';                           // SMTP password
$mail->Password = 'web1980DSl';                           // SMTP password

// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('webmaster@wantedmodelmanagement.com', 'JOJO');
$mail->addAddress('support@managerfashion.com', 'Joel');

// $mail->addAttachment('index.php');         // Add attachments
$mail->isHTML(true);

$mail->Subject = 'Archivos PHP 2.1';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}