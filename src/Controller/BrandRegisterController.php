<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Form\BrandRegistrationType;
use App\Controller\BrandRegisterController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BrandRegisterController extends AbstractController
{
    #[Route('/brand/register', name: 'brand_register')]
    public function index(): Response
    {
        return $this->render('brand/register.html.twig', [
            'controller_name' => 'BrandRegisterController',
        ]);
    }

     
    #[Route('/brand/register', name: 'brand_register')]
    public function newBrand(Request $request): Response
    {
        $brand = new Brand();
        $form = $this->createForm(BrandRegistrationType::class, $brand);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($brand);
            $manager->flush();

            $this->addFlash('success', 'Votre entreprise a été bien enregistrée');

            return $this->redirectToRoute('brand_register');
         
        } else{
            $this->addFlash(
                'danger', 'Une erreur est survenue lors de l\enregistrement, veuillez réessayer'
            );
        }
        return $this->render('brand/register.html.twig', [
            'brandRegistrationForm' => $form->createView(),
        ]);

    }
}

?>
