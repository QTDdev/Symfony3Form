<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 19/10/18
 * Time: 12:05
 */

namespace DocBundle\Services;


use Doctrine\ORM\EntityManager;

class DocAuthorsManager
{
    public function __construct(EntityManager $entityManager)
    {

        $this->em = $entityManager;
    }


    private $em;

    /**
     *
     * @TODO Service qui va chercher un autor par l ID
     *
     */
    public function findAuthor($id)
    {

        $rep = $this->em->getRepository("DocBundle:Author");

            $response = array($rep->find( (int) $id));

            return $response;

        }



    /**
     *
     * @TODO Le but c'est de supprimer des Auteurs en base
     *
     */
    public function deleteAuthor($id, $confirm)
    {


        $rep = $this->em->getRepository("DocBundle:Author");
        $author = $rep->find($id);



        if($confirm == 1) {
            $this->em->remove($author);
            $this->em->flush();

            return $return=true;
        }

        return array('retour' => ($return = false), 'author' => $author);

    }

}
