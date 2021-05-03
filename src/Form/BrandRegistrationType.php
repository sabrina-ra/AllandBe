<?php

namespace App\Form;

use App\Entity\Brand;
use App\Form\BrandRegistrationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class BrandRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required'=>true,
                'label'=> 'Dénomination sociale',
                 'attr'=>[
                     'placeholder' => "Dénomination sociale"
                 ]
            ])
            ->add('siret', IntegerType::class, [
                'required'=> true,
                'label'=> 'Numéro SIRET',
                'attr'=>[
                    'placeholder' => "Numéro SIRET",
                    'min'=>000000001,
                    'max'=>9999999999999,
                    
                ],
                

            ])
            ->add('business_type', ChoiceType::class, [
                'choices'=>[
                    '-choix-'=> '',
                    'B vers B'=> 'B vers B',
                    'B vers C'=> 'B vers C',                    
                    'C vers C'=> 'C vers C',
                ],
                'required'=>true,
                'multiple'=>false, 
                'label'=>'Type dy commerce',
                'attr'=>[
                    'placeholder' => "Type de commerce",
                ],

            ] )
            ->add('company_type', ChoiceType::class, [
                'choices'=>[
                    '-choix-'=> '',
                    'Entreprise petite'=> 'Entreprise petite',
                    'Moyenne entreprise'=> 'Moyenne entreprise',                    
                    'Grande entreprise'=> 'Grande entreprise',
                ],
                'required'=>true,
                'multiple'=>false, 
                'label'=>'Type d\'entreprise',
                'attr'=>[
                    'placeholder' => "Type d\'entreprise",
                ],

            ])
            ->add('market_type', ChoiceType::class, [
                'choices'=>[
                    '-choix-'=> '',
                    'Marketplace'=> 'Marketplace',
                    'Option2'=> 'Option2',                    
                    'Option3'=> 'Option3',
                ],
                'required'=>true,
                'multiple'=>false, 
                'label'=>'Type de marché',
                'attr'=>[
                    'placeholder' => "Type de marché",
                ],
            ])
            ->add('secteur', ChoiceType::class, [
                'choices'=>[
                    '-choix-'=> '',
                    'Magasin de mode/accessoires/objets'=> 'Magasin de mode/accessoires/objets',
                    'Option 3'=>'Oprion2',
                    'Option 2'=> 'Option 3',
                ],
                'required'=>true,
                'multiple'=>false, 
                'label'=>'Secteur',
                'attr'=>[
                    'placeholder' => "Secteur",
                ],
            ])
            ->add('speciality', ChoiceType::class, [ 
                'required'=>true,
                'choices'=>[
                    '-choix-'=> '',
                    'Vêtements et accessoires'=>'Option1',
                    'Spécialité 2'=> 'Option2',
                ],
               
                'multiple'=>false, 
                'label'=>'Specialité',
                'attr'=>[
                    'placeholder' => "Spécialité",
                ],

            ])
        
            ->add('address', TextType::class, [
                'required'=>true,
                'label'=> 'Adresse',
                'attr'=>[
                    'placeholder'=> 'Ex: 11 rue de la Liberté'
                ]
            ])
            ->add('zip_code', IntegerType::class, [
                'required'=>true,
                'label'=> 'Code postal',
                'attr'=>[
                    'placeholder'=> 'Ex: 75000',
                    'min'=> 10000,
                    'max'=>99999,
                ]

            ])
            ->add('city', TextType::class,[
                'required'=>true,
                'label'=> 'Ville',
                'attr'=>[
                    'placeholder'=> 'Ex: Paris'
                ]
            ])
            ->add('district', TextType::class,[
                'required'=>true,
                'label'=>'Région',
                'attr'=>[
                    'placeholder'=>'Ex: Ile de France'
                ]
            ])
            ->add('country', TextType::class, [
                'required'=>true,
                'label'=>'Pays',
                'attr'=>[
                    'placeholder'=>'Ex: France'
                ]
            ])
            ->add('tva_number', TextType::class, [
                'required'=>true,
                'label'=> 'Numéro TVA',
                'attr'=>[
                    'placeholder'=>' FR 00 000 000 000', 
                    'minLength'=>13,
                    'maxLength'=>13
                ],
              
            ])
            ->add('volume_prevu', IntegerType::class, [
                'required'=>true,
                'label'=>'Volume annuel prévu',
                'attr'=>[
                    'placeholder'=>'100000'
                ],
            ])
            ->add('volume_reel', IntegerType::class,[
                'required'=>true,
                'label'=>'Volume annuel réel',
                'attr'=>[
                    'placeholder'=>'100000'
                ],
            ])

            ->add('valider', SubmitType::class)
        ;


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Brand::class,
        ]);
    }
}
