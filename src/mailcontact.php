<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if (isset($_POST['Envoyer'])) {
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

        //Recipients
        $mail->setFrom('site@wattmax.com', 'wattmax.fr');
        $mail->addAddress('contact@wattmax.fr', 'Conctact WattMax');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nouveau Contact';
        $mail->Body    = 'un nouveau contact veux prendre contact avec vous, voici son contact:<br>Nom : ' . $_POST['lastname'] . '<br>Prenom : ' . $_POST['firstname'] . '<br>E-mail : ' . $_POST['email'] . '<br>Message : ' . $_POST['message'] . '<br>';
        $mail->AltBody = 'un nouveau contact veux prendre contact avec vous, voici son contact:<br>Nom : ' . $_POST['lastname'] . '<br>Prenom : ' . $_POST['firstname'] . '<br>E-mail : ' . $_POST['email'] . '<br>Message : ' . $_POST['message'] . '<br>';
        
        $mail->send();
        echo 'Message has been sent';
        header('Location: ../../');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
