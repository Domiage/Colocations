<?php

// src/OC/PlatformBundle/Controller/AdvertController.php
// il faut créer un fichier twig dans src/OC/PlatformBundle/Resources/views/Advert au besoin !

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

    public function viewAction($id)
    {
        $advert = array(
            'title'   => 'Appartement 2 pièces - Nantes centre ville',
            'id'      => $id,
            'author'  => 'Henri',
            'content' => 'Magnifique appartement de 35 m², au coeur du centre ville de Nantes, proche de tout commerce !',
            'date'    => new \Datetime()
        );

        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));
    }


    public function addAction(Request $request)
    {
        // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {
            // Ici, on s'occupera de la création et de la gestion du formulaire

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // Puis on redirige vers la page de visualisation de cettte annonce
            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }
    /*
    public function addAction(Request $request)
    {
        // On récupère le service
        $antispam = $this->container->get('oc_platform.antispam');

        // Je pars du principe que $text contient le texte d'un message quelconque
        $text = '...';
        if ($antispam->isSpam($text)) {
            throw new \Exception('Votre message a été détecté comme spam ! Il faut plus que 50 caractères dans le descriptif de l\'annonce !');
        }

        // Ici le message n'est pas un spam
    }*/

    public function editAction($id, Request $request)
    {
        // ...

        $advert = array(
            'title'   => 'Appartement 2 pièces - Nantes centre ville',
            'id'      => $id,
            'author'  => 'Henri',
            'content' => 'Magnifique appartement de 35 m², au coeur du centre ville de Nantes, proche de tout commerce !',
            'date'    => new \Datetime()
        );

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert
        ));
    }

    public function deleteAction($id)
    {
        // Ici, on récupérera l'annonce correspondant à $id

        // Ici, on gérera la suppression de l'annonce en question

        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }

    public function menuAction($limit)
    {
        // On fixe en dur une liste ici, bien entendu par la suite
        // on la récupérera depuis la BDD !
        $listAdverts = array(
            array('id' => 2, 'title' => 'Appartement 2 pièces - Nantes centre ville'),
            array('id' => 5, 'title' => 'Maison 5 pièces - Saint Herblain'),
            array('id' => 9, 'title' => 'Appartement 1 pièce - Nantes Michelet')
        );

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listAdverts' => $listAdverts
        ));
    }

    public function indexAction($page)
    {
        // ...

        // Notre liste d'annonce en dur
        $listAdverts = array(
            array(
                'title'   => 'Appartement 2 pièces - Nantes centre ville',
                'id'      => 1,
                'author'  => 'Henri',
                'content' => 'Magnifique appartement de 35 m², au coeur du centre ville de Nantes, proche de tout commerce !',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Maison 5 pièces - Saint Herblain',
                'id'      => 2,
                'author'  => 'François',
                'content' => 'Imposante maison de 130 m² située à Saint-Herblain, proche ligne de tramway.',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Appartement 1 pièce - Nantes Michelet',
                'id'      => 3,
                'author'  => 'Donna',
                'content' => 'Appartement de 9m², proche de la faculté des Sciences, idéal étudiant.',
                'date'    => new \Datetime())
        );

        // Et modifiez le 2nd argument pour injecter notre liste
        return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }
}