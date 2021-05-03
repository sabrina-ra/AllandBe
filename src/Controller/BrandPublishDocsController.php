<?php

namespace App\Controller;

use App\Entity\OfficialDocs;
use App\Form\OfficialDocsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BrandPublishDocsController extends AbstractController
{
    #[Route('/brand/publishdocs', name: 'brand_publish_docs')]
    public function index(): Response
    {
        return $this->render('brand/publishDocs.html.twig', [
            'controller_name' => 'BrandPublishDocsController',
        ]);
    }

    #[Route('/brand/publishdocs', name: 'brand_publish_docs')]
    public function brandDocs(Request $request): Response{
        $docs = new OfficialDocs();
        $form =  $this->createForm(OfficialDocsType::class, $docs);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($docs);
            $manager->flush();

            $this->addFlash('success_docs', 'Votre documents ont été bien enregistrés');

            return $this->redirectToRoute('brand_publish_docs');
         
        } else{
            $this->addFlash(
                'danger', 'Une erreur est survenue lors de l\envoie de vos documents, veuillez réessayer à nouveau'
            );
        }
        return $this->render('brand/publishDocs.html.twig', [
            'publishDocsForm' => $form->createView(),
        
        ]);



    }
}

