<?php

namespace DocBundle\Controller;

use DocBundle\Classes\Livre;
use DocBundle\Entity\Book;
use DocBundle\Form\BookType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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


    /**
     * @Route("/books/query/{offset}/{limit}/{name}", name="docBooksQuery", defaults={"ofsset"=0,"limit"=0, "name"=""})
     * @TODO Le but c'est d'afficher des Lires en base avec query slector
     *
     */
    public function afficheBookQueryAction($offset,$limit,$name)
    {



        $em = $this->get('doctrine.orm.entity_manager');
        $rep = $em->getRepository("DocBundle:Book");
        $qb = $rep->createQueryBuilder('b');
        $qb->select('b');
        $name != "" ? ($qb->where('b.title like :name ' ) && $qb->setParameter('name', "%$name%") ) : $name;
        $qb->orderBy('b.id', "ASC");
        $offset != 0 ? $qb->setFirstResult($offset): $offset;
        $limit != 0 ? $qb->setMaxResults($limit): $limit;
        $query = $qb->getQuery();
        $response = $query->getResult();




        return $this->render('@Doc/Doc/doc_books.html.twig', array('livres' => $response) );

    }

    /**
     * @Route("/books/dql/{offset}/{limit}/{name}", name="docBooksQuery", defaults={"ofsset"=0,"limit"=0, "name"=""})
     * @TODO Le but c'est d'afficher des Lires en base avec DQL
     * @TODO a terminer
     *
     */
    public function afficheBookDqlAction($offset,$limit,$name)
    {



        $em = $this->get('doctrine.orm.entity_manager');
        $qb = $em->createQuery();

        $qb = $rep->cre;
        $qb->select('b');
        $name != "" ? ($qb->where('b.title like :name ' ) && $qb->setParameter('name', "%$name%") ) : $name;
        $qb->orderBy('b.id', "ASC");
        $offset != 0 ? $qb->setFirstResult($offset): $offset;
        $limit != 0 ? $qb->setMaxResults($limit): $limit;
        $query = $qb->getQuery();
        $response = $query->getResult();




        return $this->render('@Doc/Doc/doc_books.html.twig', array('livres' => $response) );

    }


    /**
     * @Route("/new/book", name="docbookAdd" )
     * @TODO Le but c'est d'ajouter des livres en base
     *
     */
    public function ajouterABookAction(Request $request)
    {
        //On va voir s'il y a une requête et la traité
        $em = $this->get('doctrine.orm.entity_manager');


        $book = new Book;
        $form = $this->createForm(BookType::class, $book);


        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em->persist($book);
                $em->flush();

                return $this->redirectToRoute("docAuthors");
            }
        }




        return $this->render('@Doc/Doc/doc_book_add.html.twig', array('formBook' => $form->createView()) );

    }


}