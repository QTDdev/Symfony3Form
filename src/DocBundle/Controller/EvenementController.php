<?php

namespace DocBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EvenementController extends Controller
{

    /**
     * @Route("/evenements/{id}", name="docEvenements", defaults={"id"=0} )
     * @TODO Le but c'est d'afficher des Invites en base
     *
     */
    public function afficheEvenementsAction($id)
    {


        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Evenement");

        if ($id == 0){
            $response =$rep->findAll();

        }else{
            $response = array($rep->find( (int) $id));

        }





        return $this->render('@Doc/Doc/doc_evenements.html.twig', array('evenements' => $response) );

    }

}
