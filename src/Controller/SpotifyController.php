<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpotifyController extends AbstractController
{
    /**
     * @Route("/spotify", name="spotify")
     */
    public function index(): Response
    {
        return $this->render('spotify/spotify.html.twig', [
            'client_id' => '91db317bc7794f168be20c73c905b3d1',
        ]);
    }
}
