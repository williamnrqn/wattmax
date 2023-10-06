<?php

namespace App\Controller;

use App\Entity\Scooter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScooterController extends AbstractController
{
    #[Route('/Scooters', name: 'app_scooters')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $scooters = $entityManager->getRepository(Scooter::class)->findAll();

        return $this->render('scooter/index.html.twig', [
            'motos' => $scooters
        ]);
    }
}
