<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Realisation;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RealisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('auteur', EntityType::class, [
            'class' => Auteur::class,
            'choice_label' => 'prenom'
         ])
            ->add('imageFile', FileType::class, [
                'required' => true,
               ])
            ->add('date_publication', DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
                'label'=> 'Date de publication: '
                
            ])
            ->add('description_image', TextareaType::class, [
                'label'=>' Description: ',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Realisation::class,
        ]);
    }
}
