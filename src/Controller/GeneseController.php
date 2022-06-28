<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneseController extends AbstractController
{
    #[Route('/genese', name: 'app_genese')]
    public function index(): Response
    {
        return $this->render('genese/index.html.twig', [
            'controller_name' => 'GeneseController',
        ]);
    }
}
