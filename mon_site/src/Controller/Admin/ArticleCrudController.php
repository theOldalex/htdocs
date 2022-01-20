<?php

namespace App\Controller\Admin;

use App\Entity\Auteur;
use App\Entity\Article;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }


    public function configureFields(string $pageName): iterable
    {
        
        return [
            TextField::new('Titre'),
            TextEditorField::new('Contenu'),
            $image = ImageField::new('image')
                ->setUploadDir('public/uploads/images')
                ->setLabel('Image'),
                DateField::new('Date_publication'),
            ChoiceField::new('Auteur')
                ->setChoices([
                    'class' => Auteur::class,
                    'choices_label' => 'prenom'
                ]),

                               
            TextEditorField::new('Commentaire'),
        ];
    }
}
                
            
