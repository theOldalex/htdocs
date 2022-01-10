<?php

namespace App\Controller;

use App\Form\ContactType;



use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
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

            $email = (new TemplatedEmail())
                ->from($contact['email'])
                ->to('91xwriter@contact.fr')
                ->subject("What's the point of the Symfony Mailer, anyway?")
                ->html('<h1>HTML email</h1><p>Email with HTML tags if the client supports it.</p>')
                ->text(
                    $this->renderView(   
                        'emails/contact.html.twig',
                        compact('contact')
                    ),
                );
                
            $mailer->send($email);
            $this->addFlash('message', 'Votre message a été transmis !');
        }






        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
