<?php

namespace App\Form;

use App\Entity\RERNG;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RERNGType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Rames')
            ->add('motrices')
            ->add('mise_en_service', DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
            ])
            ->add('livree', ChoiceType::class, [
                'choices' => [
                    '--Choissisez une livrée--' => [
                        'Ile-de-France Mobilités' => 'Ile-de-France Mobilités',

                    ],

                ],
                
            ])
            ->add('nombre_de_caisses')
            ->add('stf')
            ->add('radiation' , DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
            ])
            ->add('equipements_interieurs',ChoiceType::class, [
                'choices' => [
                    '--Choissisez les équipements intérieurs--' => [
                        'SIVE - vidéosurveillance' => 'SIVE - vidéosurveillance',
                        
                        

                    ],

                ],
                
            ])
            ->add('lignes',ChoiceType::class, [
                'choices' => [
                    '--Choissisez une ou plusieurs ligne(s)--' => [
                        'RER D' => 'RER D',
                        'RER E' => 'RER E',
                        'En essai' => 'En essai',
                        

                    ],

                ],
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RERNG::class,
        ]);
    }
}
