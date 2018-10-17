<?php

namespace DocBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthorController extends Controller
{

    /**
     * @Route("/authors/{id}", name="docAuthors", defaults={"id"=0} )
     * @TODO Le but c'est d'afficher des Auteurs en base
     *
     */
    public function afficheAuthorAction($id)
    {


        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Author");

        if ($id == 0){
            $response =$rep->findAll();

        }else{
            $response = array($rep->find( (int) $id));
        }



        return $this->render('@Doc/Doc/doc_authors.html.twig', array('authors' => $response) );

    }
}
