<?php

namespace Odoswitch\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Home extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return new Response("je suis ok David", 200);
    }
}
