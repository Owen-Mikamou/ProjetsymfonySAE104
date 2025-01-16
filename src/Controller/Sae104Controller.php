<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Sae104Controller extends AbstractController
{
    #[Route('/accueil', name: 'app_sae104')]
    public function index(): Response
    {
        return $this->render('sae104/index.html.twig', [
            'controller_name' => 'Sae104Controller',
            'name' => 'Votre Nom',
            'group' => 'Votre Groupe TP',
            'presentation' => 'Une phrase de présentation'
        ]);
    }

    #[Route('accueil/CV', name: 'app_CV')]
        public function CV(): Response
        {
            return $this->render('sae104/CV.html.twig', [
                'controller_name' => 'Sae104Controller',
                'jobTitle' => 'Alternance Sécurité et Réseaux - 2 ans | 2 semaines / 2 semaines',
            'formations' => ['BUT Réseaux et Télécommunications', 'Baccalauréat Scientifique'],
            'experiences' => ['Stage chez Entreprise X', 'Développeur Web chez Entreprise Y'],
            'competences' => ['Réseaux', 'Programmation', 'Sécurité', 'Gestion de projet'],
            'langues' => ['Français', 'Anglais'],
            ]);
        }
}
