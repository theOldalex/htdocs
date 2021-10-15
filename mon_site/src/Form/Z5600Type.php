<?php

namespace App\Form;

use App\Entity\Livree;
use App\Entity\Z5600;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;




class Z5600Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Rames')
            ->add('motrices')
            ->add('mise_en_service', DateType::class, [
                'years' => range(1980, 2026), 
                'label' => "Mise en service"
            ])
            ->add('livree', ChoiceType::class, [
                'placeholder' => 'Choose an option',
            ])
            ->add('nombre_de_caisses')
            ->add('stf')
            ->add('radiation')
            ->add('equipements_interieurs')
            ->add('lignes')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Z5600::class,
        ]);
    }
    
}