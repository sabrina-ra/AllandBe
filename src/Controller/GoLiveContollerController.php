<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoLiveContollerController extends AbstractController
{
    #[Route('brand/go-live', name: 'brand-go-live')]
    public function index(): Response
    {
        return $this->render('brand/golive.html.twig', [
            'controller_name' => 'GoLiveContollerController',
        ]);
    }
}
