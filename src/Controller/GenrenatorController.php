<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenrenatorController extends AbstractController
{
    #[Route('/', name: 'app_genrenator')]
    public function index(): Response
    {
        return $this->render('genre/index.html.twig',[
            'message' => 'Welcome to your new controller!',
        ]);
    }
}
