<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZedController extends AbstractController
{
    #[Route('/zed', name: 'app_zed')]
    public function index(): Response
    {
        return $this->render('zed/index.html.twig', [
            'controller_name' => 'ZedController',
        ]);
    }
}
