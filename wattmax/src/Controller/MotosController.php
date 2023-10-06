<?php

namespace App\Controller;

use App\Entity\Moto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MotosController extends AbstractController
{
    #[Route('/Motos', name: 'app_motos')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $motos = $entityManager->getRepository(Moto::class)->findAll();

        return $this->render('motos/index.html.twig', [
            'motos' => $motos
        ]);
    }
}
