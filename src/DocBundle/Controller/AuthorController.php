<?php

namespace DocBundle\Controller;


use DocBundle\Entity\Author;
use DocBundle\Form\AuthorType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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


    /**
     * @Route("/new/author", name="docAuthorsAdd" )
     * @TODO Le but c'est d'ajouter des Auteurs en base
     *
     */
    public function ajouterAuthorAction(Request $request)
    {
        $author = new Author;
        $form = $this->createForm(AuthorType::class, $author);

        //On va voir s'il y a une requête et la traité
        $em = $this->get('doctrine.orm.entity_manager');
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em->persist($author);
                $em->flush();

                return $this->redirectToRoute("docAuthors");
            }
        }




        return $this->render('@Doc/Doc/doc_authors_add.html.twig', array('formAuthor' => $form->createView()) );

    }

    /**
     * @Route("/update/author/{id}", name="docAuthorsUpdate" )
     * @TODO Le but c'est de modifier des Auteurs en base
     *
     */
    public function updateAuthorAction($id, Request $request)
    {

        //On va voir s'il y a une requête et la traité
        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Author");
        $author = $rep->find($id);
        $form = $this->createForm(AuthorType::class, $author);

        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();

                return $this->redirectToRoute("docAuthors");
            }

        }



        return $this->render('@Doc/Doc/doc_authors_update.html.twig', array('formAuthor' => $form->createView()) );

    }

    /**
     * @Route("/delete/author/{id}/{confirm}", name="docAuthorsUpdate", defaults={"confirm"=0} )
     * @TODO Le but c'est de supprimer des Auteurs en base
     *
     */
    public function deleteAuthorAction($id, $confirm, Request $request)
    {

        //On va voir s'il y a une requête et la traité
        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Author");
        $author = $rep->find($id);
        $form = $this->createForm(AuthorType::class, $author);



        if($confirm == 1) {
                $em->remove($author);
                $em->flush();

                return $this->redirectToRoute("docAuthors");
            }





        return $this->render('@Doc/Doc/doc_authors_delete.html.twig', array('formAuthor' => $form->createView()) );

    }


}
