<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return user::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID'),
            TextField::new('Email'),
            TextField::new('Is Verified'),
            TextField::new('Prénom'),
            TextField::new('Nom'),
            TextField::new(''),
        ];
    }
    */
}
