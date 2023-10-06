<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConditionsGeneralesController extends AbstractController
{
    #[Route('/Conditions-générales', name: 'app_conditions_generales')]
    public function index(): Response
    {
        return $this->render('conditions_generales/index.html.twig', [
        ]);
    }
}
