<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\EditProfileType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


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


    #[Route('/{id}/edit', name: 'users_edit', methods: ['GET', 'POST'])]

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


    #[Route('/{id}', name: 'users_delete', methods: ['GET', 'POST'])]

    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('users_delete', [], Response::HTTP_SEE_OTHER);
    }


    #[Route("/users/profil/edit", name: "profil_edit")]

    public function editProfile(Request $request)
    {

        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Votre profil a bien été mis à jour !');
            return $this->redirectToRoute('users/profil', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/editprofile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route("/users/pass/edit", name: "pass_edit")]
    public function editPass(Request $request, UserPasswordHasherInterface $passwordencoder)
    {
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();

            //On verifie ici si les deux mdp sont identiques avant d'encoder

            if($request->request->get('pass') === $request->request->get('pass2')){
$user->setPassword($passwordencoder->encodePassword($user, $request->request->get('pass')));

            }else{
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques !');
            }
            
        }
        

        return $this->render('users/editpass.html.twig');
    }
}
