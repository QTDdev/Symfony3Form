<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 16/10/18
 * Time: 10:13
 */


namespace DocBundle\Classes;

/**
 * Class Livre
 * @package DocBundle\Classes
 * @TODO Class Livre que l'on va afficher après
 *
 *
 */
class Livre
{

    private $titre;
    private $id;

    public function __construct($id,$titre="non")
    {
        $this->setTitre($titre);
        $this->setId($id);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }




}