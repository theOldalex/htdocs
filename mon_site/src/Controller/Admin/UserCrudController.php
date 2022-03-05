<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return user::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            EmailField::new('Email'),
            ArrayField::new('Roles'),
            TextField::new('Prenom'),
            TextField::new('Nom'),
            BooleanField::new('IsVerified'),
            $avatar = ImageField::new('Avatar')
            ->setUploadDir('/public')
            ->setLabel('Avatar'),
        ];
    }
    
}
