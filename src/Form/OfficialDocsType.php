<?php

namespace App\Form;

use App\Entity\OfficialDocs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OfficialDocsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', FileType::class,[
                'required'=>true,
                'attr'=>[
                    'placeholder'=> 'Status de votre société',
                ],
                'constraints'=>[
                    new File([
                        'maxSize'=>'2048k',
                        'mimeTypes'=>'application/pdf',
                        'mimeTypesMessage'=>'Merci de sélectionner un fichier au format pdf'
                    ])
                ]
            ])
            ->add('piece_identite', FileType::class,[
            'required'=>true,
            'attr'=>[
                'placeholder'=> 'Pièce d\'identité du représentant légal',
            ],
            'constraints'=>[
                new File([
                    'maxSize'=>'2048k',
                    'mimeTypes'=>'application/pdf',
                    'mimeTypesMessage'=>'Merci de sélectionner un fichier au format pdf'
                ])
            ]
        ])

            ->add('conditions_generales',FileType::class,[
                'required'=>true,
                'attr'=>[
                    'placeholder'=> 'Conditions générales de votre plateforme',
                ],
                'constraints'=>[
                    new File([
                        'maxSize'=>'2048k',
                        'mimeTypes'=>'application/pdf',
                        'mimeTypesMessage'=>'Merci de sélectionner un fichier au format pdf'
                    ])
                ]
            ])
            ->add('preuve_enregistrement',FileType::class,[
                'required'=>true,
                'attr'=>[
                    'placeholder'=> 'Preuve d\'enregistrement de votre entreprise (datée des trois derniers mois ',
                ],
                'constraints'=>[
                    new File([
                        'maxSize'=>'2048k',
                        'mimeTypes'=>'application/pdf',
                        'mimeTypesMessage'=>'Merci de sélectionner un fichier au format pdf'
                    ])
                ]
            ])
            ->add('table_capitalisation',FileType::class,[
                'required'=>true,
                'attr'=>[
                    'placeholder'=> 'Table de capitalisation de votre société (signé et daté',
                ],
                'constraints'=>[
                    new File([
                        'maxSize'=>'2048k',
                        'mimeTypes'=>'application/pdf',
                        'mimeTypesMessage'=>'Merci de sélectionner un fichier au format pdf'
                    ])
                ]
            ])
            ->add('coordonnees_bancaires',FileType::class,[
                'required'=>true,
                'attr'=>[
                    'placeholder'=> 'Cordonnées bancaires (à des fins de facturation',
                ],
                'constraints'=>[
                    new File([
                        'maxSize'=>'2048k',
                        'mimeTypes'=>'application/pdf',
                        'mimeTypesMessage'=>'Merci de sélectionner un fichier au format pdf'
                    ])
                ]
            ])
            // ->add('brand')
            ->add('valider', SubmitType::class)
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OfficialDocs::class,
        ]);
    }
}
