<?php

namespace Odoswitch\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Home extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(HttpClientInterface $client): Response
    {

        $response = $client->request('GET', 'https://api.wheretheiss.at/v1/satellites/25544');

        $issData = $response->toArray();

        //dd($issData);
        //return new Response("Je suis ok David", 200);
        return $this->json($issData, 200);
    }
}
