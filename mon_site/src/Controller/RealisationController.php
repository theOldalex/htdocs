<?php

namespace App\Controller;

use App\Entity\Realisation;
use App\Form\RealisationType;
use App\Repository\RealisationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
     * @Route("realisation")
     */
class RealisationController extends AbstractController
{
    /**
     * @Route("/realisation", name="realisation", methods={"GET"})
     */
    public function index(RealisationRepository $realisationRepository): Response
    {
        return $this->render('realisation/realisation.html.twig', [
            'realisations' => $realisationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="realisation_new", methods={"GET","POST"})
     */
    public function new(Request $request, KernelInterface $kernel): Response
    {
        $realisation = new Realisation();
        $form = $this->createForm(RealisationType::class, $realisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photos = $form->get('photo')->getData();
            foreach ($photos as $photo) {
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $photo->guessExtension();
                $photo->move(
                    $imagesDir = $kernel->getProjectDir().'/public/uploads/images',
                    $fichier
                );

            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($realisation);
            $entityManager->flush();

            return $this->redirectToRoute('realisation', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('realisation/new.html.twig', [
            'realisation' => $realisation,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="realisation_show", methods={"GET"})
     */
    public function show(Realisation $realisation): Response
    {
        return $this->render('realisation/show.html.twig', [
            'realisation' => $realisation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="realisation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Realisation $realisation): Response
    {
        $form = $this->createForm(RealisationType::class, $realisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('realisation', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('realisation/edit.html.twig', [
            'realisation' => $realisation,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="realisation_delete", methods={"POST"})
     */
    public function delete(Request $request, Realisation $realisation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$realisation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($realisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('realisation', [], Response::HTTP_SEE_OTHER);
    }
}
