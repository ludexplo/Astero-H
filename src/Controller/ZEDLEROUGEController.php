<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZEDLEROUGEController extends AbstractController
{
    #[Route('/ZedLeRouge', name: 'app_zedLeRouge')]
    public function index(): Response
    {
        return $this->render('zedlerouge/index.html.twig', [
            'controller_name' => 'ZEDLEROUGEController',
        ]);
    }
}
