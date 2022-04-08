<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Provincia;
use App\Repository\ProvinciaRepository;

class ProvinciaController extends AbstractController
{
    /**
     * @Route("/provincia", name="provincia")
     */
    public function index(): Response
    {
        return $this->render('provincia/index.html.twig', [
            'controller_name' => 'ProvinciaController',
        ]);
    }

    /**
     * @Route("/provincia/list", name="provincia_list")
     */
    public function list()
    {
        $provinciaRepository = new ProvinciaRepository();
        $provincias = $provinciaRepository
            ->findAll();

        return $this->render('provincia/list.html.twig', ['provincias' => $provincias]);
    }
}
