<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $manager,MailerInterface $mailer ): Response
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('nom')
            ->add('email',EmailType::class)
            ->add('sujet')
            ->add('message')
            ->add('Envoyer', SubmitType::class)
            ->getForm();
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $contact= $form->getData();
                $manager->persist($contact);
                $manager->flush();

                //Email
                $email = (new Email())
                ->from($contact->getEmail())
                ->to('admin@admin.com')
                ->subject($contact->getSujet())
                ->html($contact->getMessage());
    
            $mailer->send($email);

                $this->addFlash('success', 'votre message à bien été envoyé');
           
            }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }

}
