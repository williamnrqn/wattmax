<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservezVotreEssaiController extends AbstractController
{
    #[Route('/Reservez-votre-essai', name: 'app_reservez_votre_essai')]
    public function index(Request $request): Response
    {
        $error = $request->query->get('error');

        return $this->render('reservez_votre_essai/index.html.twig', [
            'error' => $error,
        ]);
    }
}
