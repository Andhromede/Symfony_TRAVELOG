<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommunicationController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response {
        return $this->render('communication/contact.html.twig', [
            'controller_name' => 'CommunicationController',
        ]);
    }

    /**
     * @Route("/message", name="message")
     */
    public function Newmessage(): Response {
        return $this->render('messages/message.html.twig', [
            'controller_name' => 'CommunicationController',
        ]);
    }
    

    
}
