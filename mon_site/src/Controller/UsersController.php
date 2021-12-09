<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/users/profil')]
class UsersController extends AbstractController
{
    #[Route('/', name: 'users/profil', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('users/users.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }


    /**#[Route('/{id}/edit', name: 'users_edit', methods: ['GET', 'POST'])]**/
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('users/profil', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**#[Route('/{id}', name: 'users_delete', methods: ['POST'])]**/
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('users/profil', [], Response::HTTP_SEE_OTHER);
    }
}
