<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/bonjour/{nom}', defaults: ['nom' => null] ,name: 'app_bonjour')]
        public function sayBonjour($nom)
        {
            //return new Response("Bonjour $nom !");
            return $this->render('bonjour.html.twig', [
                'nom' => $nom,
                ]);
        }
}
