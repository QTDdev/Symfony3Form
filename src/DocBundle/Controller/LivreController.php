<?php

namespace DocBundle\Controller;

use DocBundle\Classes\Livre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LivreController extends Controller
{

    /**
     * @Route("/livre/affiche/{id}/{titre}", name="docLivre" )
     * @TODO passage paramêtre TWIG, on passe l'objet $livres que que l'on a créé avant
     *
     */
    public function afficheAction($id,$titre)
    {

        $livres[] = new Livre($id,$titre);
        /*$livres[] = new Livre('TITI');
        $livres[] = new Livre('TATA');
        $livres[] = new Livre('TUTU');
        $livres[] = new Livre('TETE');*/


        return $this->render('@Doc/Doc/document_livre.html.twig', array('livres' => $livres) );

    }

    /**
     * @Route("/livre/liste", name="docListe" )
     * @TODO render depuis twig de l'action
     *
     */
    public function listAction()
    {

        $response = new Response(
            "Bienvenue TOTO",
            Response::HTTP_OK,
            array('content-type' => 'text/html'));


        return $response;

    }


    /**
     * @Route("/books/{id}", name="docBooks", defaults={"id"=0} )
     * @TODO Le but c'est d'afficher des Lires en base
     *
     */
    public function afficheBookAction($id)
    {


        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Book");

        if ($id == 0){
            $response =$rep->findAll();

        }else{
            $response = array($rep->find( (int) $id));
        }



        return $this->render('@Doc/Doc/doc_books.html.twig', array('livres' => $response) );

    }
}
