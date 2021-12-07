<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/users/monprofil', name: 'users')]
    public function index(): Response
    {
        return $this->render('users/users.html.twig');
    }
}
