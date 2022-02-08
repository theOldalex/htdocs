<?php

namespace App\Form;

use App\Entity\Contact;
use FOS\CKEditorBundle\Config\CKEditorConfigurationInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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

            ->add('sujet', TextType::class, [
                'label' => 'Sujet: ',
            ])

            ->add('commentaire', TextareaType::class, [
                'label' => 'Message: ',
                
            ])
            ->add('Envoyer', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                'class' => 'btn btn-warning btn-sm',
            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
