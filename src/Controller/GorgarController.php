<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GorgarController extends AbstractController
{
    #[Route('/gorgar', name: 'app_gorgar')]
    public function index(): Response
    {
        return $this->render('gorgar/index.html.twig', [
            'controller_name' => 'GorgarController',
        ]);
    }
}
