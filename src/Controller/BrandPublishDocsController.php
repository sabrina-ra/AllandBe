<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandPublishDocsController extends AbstractController
{
    #[Route('/brand/publishdocs', name: 'brand_publish_docs')]
    public function index(): Response
    {
        return $this->render('brand/publishDocs.html.twig', [
            'controller_name' => 'BrandPublishDocsController',
        ]);
    }
}
