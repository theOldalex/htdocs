<?php

namespace App\Form;

use App\Entity\Z5600;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Z56001Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Rames')
            ->add('motrices')
            ->add('mise_en_service')
            ->add('livree')
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
