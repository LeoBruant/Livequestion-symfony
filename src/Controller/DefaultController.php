<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Form\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
		$profile = new Profile();

		$form = $this->createForm(ProfileType::class, $profile);

        return $this->render('default/connexion.html.twig', [
			'controller_name' => 'DefaultController',
			'form' => $form->createView(),
        ]);
	}

	/**
     * @Route("/presentation", name="presentation")
     */
    public function actualites()
    {
		$actualites = [
			[
				'titre' => 'Titre',
				'contenu' => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ',
				'lien' => 'https://lien.com',
			],

			[
				'titre' => 'Titre',
				'contenu' => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ',
				'lien' => 'https://lien.com',
			],

			[
				'titre' => 'Titre',
				'contenu' => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ',
				'lien' => 'https://lien.com',
			],
		];

		return $this->render('default/presentation.html.twig', [
			'actualites' => $actualites,
		]);
	}

	/**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('default/inscription.html.twig', [
			'controller_name' => 'DefaultController',
        ]);
	}
}
