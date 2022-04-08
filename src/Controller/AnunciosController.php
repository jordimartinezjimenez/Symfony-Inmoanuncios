<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnunciosController extends AbstractController
{
    /**
     * @Route("/anuncios", name="app_anuncios")
     */
    public function index(): Response
    {
        return $this->render('anuncios/index.html.twig', [
            'controller_name' => 'AnunciosController',
        ]);
    }
}
