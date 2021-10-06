<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/")
     */
    public function afficherHome(): Response {
        return new Response('Hello !');
    }

    /**
     * @Route("/chemin")
     */
    public function chemin() {
        $tab = [[
            'prenom' => 'Marc',
            'status' => true
        ], [
            'prenom' => 'Pierre',
            'status' => false
        ], [
            'prenom' => 'Paul',
            'status' => false
        ], [
            'prenom' => 'Jacques',
            'status' => true
        ], [
            'prenom' => 'Jordan',
            'status' => true
        ]];
        
        return $this->render('home.html.twig', [
            'users' => $tab
        ]);
    }
}