<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                /* Le champ 'images' n'est pas lié à la base de donnée !*/
                'mapped' => false,
                'required' => false,
            ])
            ->add('date_publication', DateType::class, [
                'widget'=> 'single_text',
                'input_format'=> 'd/m/Y',
                'label'=> 'Date de publication: '
                
            ])
            ->add('auteur', EntityType::class, [
               'class' => Auteur::class,
               'choice_label' => 'prenom'
               
            ])
            ->add('commentaire', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

