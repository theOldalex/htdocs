<?php

namespace App\Controller;

use App\Form\ContactType;



use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);
       

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $email = (new Email())
                ->from('a.diakite@yopmail.com')
                ->to('91xwriter@contact.fr', 'no-reply')
                ->subject("What's the point of the Symfony Mailer, anyway?")
                ->html('<h1>HTML email</h1><p>Email with HTML tags if the client supports it.</p>')
                ->text(
                    $this->renderView(   
                        'emails/contact.html.twig',
                        compact('contact')
                    ),
                );
                
            $mailer->send($email);
            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.');
        }






        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
