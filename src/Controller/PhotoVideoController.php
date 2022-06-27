<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhotoVideoController extends AbstractController
{
    #[Route('/photoVideo', name: 'app_photo_video')]
    public function index(): Response
    {
        return $this->render('photo_video/index.html.twig', [
            'controller_name' => 'PhotoVideoController',
        ]);
    }
}
