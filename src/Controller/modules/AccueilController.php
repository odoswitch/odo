<?php

namespace Odoswitch\Controller\modules;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        //dd($_SERVER["HTTP_HOST"]);
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'Application Gestion Mot de pass',
        ]);
    }
}
