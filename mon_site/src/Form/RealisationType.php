<?php

namespace App\Form;

use App\Entity\Realisation;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;



class RealisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('auteur', TextType::class, [
                'label'=>'Auteur: ',
            ])
            ->add('nom_image', TextType::class, [
                'label'=> 'Nom de l\'image: ',
                ])
            ->add('date_publication', DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
                'label'=> 'Date de publication: '
                
            ])
            ->add('description_image', TextType::class, [
                'label'=>' Description: ',
                ])
            ->add('photo', TextType::class, [
                'label'=>'Insérez une photo: '
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Realisation::class,
        ]);
    }
}
