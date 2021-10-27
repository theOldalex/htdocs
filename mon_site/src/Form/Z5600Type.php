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
                        'Transilien' => 'Transilien',
                        'Ile-de-France' => 'Ile-de-France',
                        'Ile-de-France Mobilités' => 'Ile-de-France Mobilités',
                        'Carmillon' => 'Carmillon',

                    ],

                ],
                
            ])
                
                
            ->add('nombre_de_caisses', TextType::class
                
                )
            ->add('stf',ChoiceType::class, [
                'choices' => [
                    '--Choissisez une Supervision Technique de Flotte--' => [
                        'STF Transilien ligne C (SLC)' => 'SLC',
                        'STF Transilien ligne D et R (SLD)' => 'SLD',
                        

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
                        'SIVE - vidéosurveillance' => 'SIVE - vidéosurveillance',
                        
                        

                    ],

                ],
                
            ])
                
                
            ->add('lignes',ChoiceType::class, [
                'choices' => [
                    '--Choissisez une ou plusieurs ligne(s)--' => [
                        'RER C' => 'RER C',
                        'Transilien R' => 'Transilien R',
                        

                    ],

                ],
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Z5600::class,
        ]);
    }
    
}