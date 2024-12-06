<?php

namespace App\Controller;

use App\Entity\Sally;
use App\Form\SallyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SallyController extends AbstractController
{
    #[Route('/sally', name: 'app_sally')]
    public function index(EntityManagerInterface $emi, Request $req): Response
    {
        $sallies = $emi->getRepository(Sally::class)->findAll();
        $sally = new Sally();

        $form = $this->createForm(SallyType::class, $sally);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()) {
            $emi->persist($sally); // klaar zetten om naar de database te sturen
            $emi->flush(); // versturen naar de database
            $this->addFlash('success', 'Sally created!'); // function van symfony om een melding te geven
            return $this->redirectToRoute('app_sally');
        }


        return $this->render('sally/index.html.twig', [
            'controller_name' => 'SallyController',
            'sallies' => $sallies,
            'form' => $form,
        ]);
    }


}
