<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ContactType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {

        
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
       

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $message = (new Email())
                ->from($contact->get('email')->getData())
                ->to('91xwriter@contact.fr')
                ->subject("Contact")
                ->html([
                    'email'=> $contact->get('email')->getData(),
                     'message'=> $contact->get('message')->getData()
                ]);
                
                
            $mailer->send($message);
            $this->addFlash('message', 'Votre message a été transmis !');
            return $this->redirectToRoute('home');
        }






        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
