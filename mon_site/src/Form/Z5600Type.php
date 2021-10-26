<?php

namespace App\Form;

use App\Entity\Livree;
use App\Entity\Z5600;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class Z5600Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Rames', TextType::class, [

            ])
            ->add('motrices', TextType::class, [
                
            ])
            ->add('mise_en_service', DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
                
            ])
            ->add('livree', ChoiceType::class, [
                'choices' => [
                    '--Choissisez une livrée--' => [
                        'Transilien' => 'livree',
                        'Ile-de-France' => 'livree',
                        'Ile-de-France Mobilités' => 'livree',
                        'Carmillon' => 'livree',

                    ],

                ],
                
            ])
                
                
            ->add('nombre_de_caisses', TextType::class
                
                )
            ->add('stf',ChoiceType::class, [
                'choices' => [
                    '--Choissisez une Supervision Technique de Flotte--' => [
                        'STF Transilien ligne C (SLC)' => 'stf',
                        'STF Transilien ligne D et R (SLD)' => 'stf',
                        

                    ],

                ],
                
            ])
            ->add('radiation', DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
                
            ])
            ->add('equipements_interieurs',ChoiceType::class, [
                'choices' => [
                    '--Choissisez les équipements intérieurs--' => [
                        'SIVE - vidéosurveillance' => 'equipements_interieurs',
                        
                        

                    ],

                ],
                
            ])
                
                
            ->add('lignes', TextType::class
                
                )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Z5600::class,
        ]);
    }
    
}