<?php

namespace App\Form;


use App\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CommentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nickname', TextType::class,[
            'label' => 'Pseudo',
            'attr'=> [
                'class' => 'form-control'
        ]])
            ->add('email', EmailType::class,[
                'label' => 'Adresse e-mail',
                'attr'=> [
                    'class' => 'form-control'
            ]])
            ->add('content', CKEditorType::class,[
                'label' => 'Commentaire:',
                'attr'=> [
                    'class' => 'form-control'
            ]])
            ->add('parentid', HiddenType::class,[
                'mapped' => false
            ])
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}
