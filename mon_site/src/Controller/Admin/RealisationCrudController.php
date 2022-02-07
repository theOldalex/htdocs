<?php

namespace App\Controller\Admin;

use App\Entity\Realisation;
use App\Entity\Auteur;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RealisationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Realisation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            $auteur = AssociationField::new('Auteur'),
            TextField::new('nom_image'),
            DateField::new('Date_publication'),
            TextEditorField::new('description_image'),
            $photo = ImageField::new('photo')
                ->setUploadDir('/public')
                ->setLabel('Image'),
            TextField::new('Slug'),
            
           
        ];
    }
    
}
