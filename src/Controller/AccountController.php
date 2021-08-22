<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccountController extends AbstractController {

    /**
     * @Route("/account", name="account")
     */
    public function index(): Response {
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response {
        return $this->render('account/connexion.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(): Response {
        return $this->render('account/inscription.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response {
        return $this->render('account/profil.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/parametres", name="parametres")
     */
    public function parametres(): Response {
        return $this->render('account/parametres.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/vueProfil", name="vueProfil")
     */
    public function vueProfil(): Response {
        return $this->render('account/vueProfil.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

}
