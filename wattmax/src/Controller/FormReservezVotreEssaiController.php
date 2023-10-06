<?php

namespace App\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormReservezVotreEssaiController extends AbstractController
{
    #[Route('/form/reservez/votre/essai', name: 'app_form_reservez_votre_essai', methods: 'POST')]
    public function index(): Response
    {
        if (isset($_POST['reserver'])) {
            $mail = new PHPMailer(true);
            
            if (empty($_POST['model'])) {
                return $this->redirectToRoute(
                    'app_reservez_votre_essai', [
                        'error' => 'le model n\'est pas défini'
                    ],
                    301
                );
            }
            if (empty($_POST['lastname'])) {
                return $this->redirectToRoute(
                    'app_reservez_votre_essai', [
                        'error' => 'le nom n\'est pas défini'
                    ],
                    301
                );
            }
            if (empty($_POST['firstname'])) {
                return $this->redirectToRoute(
                    'app_reservez_votre_essai', [
                        'error' => 'le prénom n\'est pas défini'
                    ],
                    301
                );
            }
            if (empty($_POST['email'])) {
                return $this->redirectToRoute(
                    'app_reservez_votre_essai', [
                        'error' => 'l\'email n\'est pas défini'
                    ],
                    301
                );
            }
            if (empty($_POST['tel'])) {
                return $this->redirectToRoute(
                    'app_reservez_votre_essai', [
                        'error' => 'le téléphone n\'est pas défini'
                    ],
                    301
                );
            }

            try {
                //Server settings
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
                return $this->redirectToRoute('app_home');
            } catch (Exception $e) {
                return $this->redirectToRoute(
                    'app_reservez_votre_essai', [
                        'error' => $e->getMessage()
                    ],
                    301
                );
            }
        }
        return $this->redirectToRoute(
            'app_reservez_votre_essai', [
                'error' => 'les données sont inexistantes'
            ],
            301
        );
    }
}
