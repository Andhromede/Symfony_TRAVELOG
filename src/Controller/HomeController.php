<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController {

    /**
     * @Route("/home", name="home")
     */
    public function home(): Response {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    















    // /**
    //  * @Route("/menuLat", name="menuLat")
    //  */
    // public function menuLat(): Response {
    //     return $this->render('menuLat.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }


}
