<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandSignController extends AbstractController
{
    #[Route('/brand/sign', name: 'brand_sign')]
    public function index(): Response
    {
        return $this->render('brand/signDocs.html.twig', [
            'controller_name' => 'BrandSignController',
        ]);
    }
}
