<?php

namespace DocBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InviteController extends Controller
{

    /**
     * @Route("/invites/{id}", name="docInvites", defaults={"id"=0} )
     * @TODO Le but c'est d'afficher des Invites en base
     *
     */
    public function afficheInviteAction($id)
    {


        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Invite");

        if ($id == 0){
            $response =$rep->findAll();

        }else{
            $response = array($rep->find( (int) $id));
        }



        return $this->render('@Doc/Doc/doc_invites.html.twig', array('invites' => $response) );

    }
}
