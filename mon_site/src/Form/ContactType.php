<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'Prénom: ',
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom: ',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email: ',
            ])
            ->add('commentaire', TextType::class, [
                'label' => 'Message: ',
                
            ])
            ->add('fichier', FileType::class, [
                'label' => 'Importer un fichier: ',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
