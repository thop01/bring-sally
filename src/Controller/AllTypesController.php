<?php

namespace App\Controller;

use App\Entity\AllTypes;
use App\Form\AllKindType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AllTypesController extends AbstractController
{
    #[Route('/all/types', name: 'app_all_types')]
    public function index(EntityManagerInterface $emi, Request $req): Response
    {
        $form = $this->createForm(AllKindType::class);


        return $this->render('all_types/index.html.twig', [
            'controller_name' => 'AllTypesController',
            'form' => $form,
        ]);
    }
}
