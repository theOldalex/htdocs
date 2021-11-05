<?php

namespace App\Controller;

use App\Entity\RERNG;
use App\Form\RERNGType;
use App\Repository\RERNGRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("rerng")
 */
class RERNGController extends AbstractController
{
    /**
     * @Route("/", name="rerng", methods={"GET"})
     */
    public function index(RERNGRepository $rERNGRepository): Response
    {
        return $this->render('rerng/rerng.html.twig', [
            'r_e_r_n_gs' => $rERNGRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="rerng_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $rERNG = new RERNG();
        $form = $this->createForm(RERNGType::class, $rERNG);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rERNG);
            $entityManager->flush();

            return $this->redirectToRoute('rerng', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('rerng/new.html.twig', [
            'rerng' => $rERNG,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="rerng_show", methods={"GET"})
     */
    public function show(RERNG $rERNG): Response
    {
        return $this->render('rerng/show.html.twig', [
            'rerng' => $rERNG,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="rerng_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, RERNG $rERNG): Response
    {
        $form = $this->createForm(RERNGType::class, $rERNG);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rerng', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('rerng/edit.html.twig', [
            'rerng' => $rERNG,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="rerng_delete", methods={"POST"})
     */
    public function delete(Request $request, RERNG $rERNG): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rERNG->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($rERNG);
            $entityManager->flush();
        }

        return $this->redirectToRoute('rerng', [], Response::HTTP_SEE_OTHER);
    }
}
