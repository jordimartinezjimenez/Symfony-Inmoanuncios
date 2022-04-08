<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnuncioController extends AbstractController
{
    /**
     * @Route("/anuncio", name="anuncio")
     */
    public function index(): Response
    {
        return $this->render('anuncio/index.html.twig', [
            'controller_name' => 'AnuncioController',
        ]);
    }

    /**
     * @Route("/anuncio/list", name="anuncio_list")
     */
    public function list()
    {
        $anuncioRepository = new AnuncioRepository();
        $anuncios = $anuncioRepository
            ->findAll();

        return $this->render('anuncio/list.html.twig', ['anuncios' => $anuncios]);
    }
}
