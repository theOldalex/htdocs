<?php

namespace App\Controller;

use App\Entity\Z5600;
use App\Form\Z5600Type;
use App\Form\SearchZ5600Type;
use App\Repository\Z5600Repository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Z5600Controller extends AbstractController
{

    public function index(Z5600Repository $z5600Repository, Request $request): Response
    {
        $form = $this->createForm(SearchZ5600Type::class,);
        $search = $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
        }

        return $this->render('z5600/z5600.html.twig', [
            'z5600s' => $z5600Repository->findAll(),
            'form' => $form->createView()
        ]);
    }

    
    public function new(Request $request): Response
    {
        $z5600 = new Z5600();
        $form = $this->createForm(Z5600Type::class, $z5600);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($z5600);
            $entityManager->flush();

            return $this->redirectToRoute('z5600', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('z5600/new.html.twig', [
            'z5600' => $z5600,
            'form' => $form,
        ]);
    }

    
    public function show(Z5600 $z5600): Response
    {
        return $this->render('z5600/show.html.twig', [
            'z5600' => $z5600,
        ]);
    }

   
    public function edit(Request $request, Z5600 $z5600): Response
    {
        $form = $this->createForm(Z5600Type::class, $z5600);
        $form->handleRequest($request);
        // dd($form);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('z5600', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('z5600/edit.html.twig', [
            'z5600' => $z5600,
            'form' => $form,
        ]);
    }

    
    public function delete(Request $request, Z5600 $z5600): Response
    {
        if ($this->isCsrfTokenValid('delete'.$z5600->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($z5600);
            $entityManager->flush();
        }

        return $this->redirectToRoute('z5600', [], Response::HTTP_SEE_OTHER);
    }

}


