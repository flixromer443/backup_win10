<?php
require("../Librerias/phpmailer/PHPMailer.php");
require("../Librerias/phpmailer/OAuth.php");
require("../Librerias/phpmailer/Exception.php");
require("../Librerias/phpmailer/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
$nombre=$_SESSION['usuario']['email'];
$voto=$_SESSION['usuario']['voto'];
    $mail = new PHPMailer(true);

try {
    //Servidor
    $mail->SMTPDebug = 0;                    
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.mail.yahoo.com';                   
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = '';                    
    $mail->Password   = '';                         
    $mail->SMTPSecure ='tls';         
    $mail->Port       = 25;                                  
    //Destinatarios
    $mail->setFrom('flixromer443@yahoo.com', 'Votemos');
    $mail->addAddress($nombre);              

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Mensaje
    $mail->isHTML(true);                                  
    $mail->Subject = 'Gracias por haber participado!!!';
    $mail->Body    = 'Gracias por haber votado <br> tu voto ha sido :<h1>'.$voto.'</h1>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    unset($_SESSION['usuario']);
    header("Location:../Index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>