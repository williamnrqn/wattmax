<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if (isset($_POST['reserver'])) {
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'wattmax.fr';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'site@wattmax.fr';                     //SMTP username
        $mail->Password   = '_Z!I1jfcsgyJ';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('site@wattmax.com', 'wattmax.fr');
        $mail->addAddress('contact@wattmax.fr', 'Contact WattMax');     //Add a recipient

        //Content
        $mail->isHTML(false);                                  //Set email format to HTML
        $mail->Subject = "Demande d'essai";

        $mail->Body    = "Un nouveau contact a fais une demande d'essai.<br>il voudrait tester le model : " . $_POST['model'] . "<br><br>Voici son contact :<br>Nom : ". $_POST['lastname'] . "<br>Prénom : ".$_POST['firstname']."<br>E-mail : ".$_POST['email']."<br>téléphone : ".$_POST['tel'];
        $mail->AltBody = "Un nouveau contact a fais une demande d'essai.\nil voudrait tester le model : " . $_POST['model'] . "\n\nVoici son contact :\nNom : ". $_POST['lastname'] . "\nPrénom : ".$_POST['firstname']."\nE-mail : ".$_POST['email']."\ntéléphone : ".$_POST['tel'];
        
        $mail->send();
        echo 'Message has been sent';
        header('Location: ../../');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
