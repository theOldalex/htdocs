<?php

namespace App\Controller;

use App\Entity\Z5600;
use App\Form\Z5600Type;
use App\Repository\Z5600Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Z5600Controller extends AbstractController
{
    /**
     * @Route("/z5600", name="z5600")
     */
    public function index(): Response
    {
        return $this->render('z5600/index.html.twig');
            
        
    }
}
