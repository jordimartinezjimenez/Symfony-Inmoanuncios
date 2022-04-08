<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/general", name="general")
     */
    public function index(): Response
    {
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

    /**
     * @Route("/general/list", name="general_list")
     */
    public function list()
    {
        $generalRepository = new GeneralRepository();
        $generals = $generalRepository
            ->findAll();
            
        return $this->render('general/list.html.twig', ['generals' => $generals]);
    }
}
