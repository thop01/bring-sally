<?php

namespace App\Controller;

use App\Entity\Sally;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SallyController extends AbstractController
{
    #[Route('/sally', name: 'app_sally')]
    public function index(EntityManagerInterface $emi): Response
    {
        $sallies = $emi->getRepository(Sally::class)->findAll();
        return $this->render('sally/index.html.twig', [
            'controller_name' => 'SallyController',
            'sallies' => $sallies,
        ]);
    }
}
