<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoyagesController extends AbstractController {
     /**
     * @Route("/indexVoyage", name="indexVoyage")
     */
    public function index(): Response{
        return $this->render('voyages/index.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    }

    /**
     * @Route("/voyages", name="voyages")
     */
    public function voyages(): Response {
        return $this->render('voyages/voyages.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    }

    /**
     * @Route("/recherchesVoyages", name="recherchesVoyages")
     */
    public function recherchesVoyages(): Response {
        return $this->render('voyages/recherchesVoyages.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    }

     /**
     * @Route("/creationVoyage", name="creationVoyage")
     */
    public function creationVoyage(): Response {
        return $this->render('voyages/creationVoyage.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    }

     /**
     * @Route("/mesVoyages", name="mesVoyages")
     */
    public function mesVoyages(): Response {
        return $this->render('voyages/mesVoyages.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    }



}
