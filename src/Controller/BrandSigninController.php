<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandSigninController extends AbstractController
{
    #[Route('/brand/signin', name: 'brand_signin')]
    public function index(): Response
    {
        return $this->render('brand/signin.html.twig', [
            'controller_name' => 'BrandSigninController',
        ]);
    }
}
