<?php

namespace DocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="DocBundle\Repository\AuthorRepository")
 */
class Author
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="biographie", type="text", length=2255, nullable=true)
     */
    private $biographie;


    /**
     *
     * @ORM\OneToMany(targetEntity="DocBundle\Entity\Book", mappedBy="author")
     * @var \Doctrine\Common\Collections\Collection
     *
     */
    private $livres;

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


    /**
     *
     * @ORM\OneToOne(targetEntity="DocBundle\Entity\Invite", mappedBy="author")
     * @var \DocBundle\Entity\Invite
     *
     */
    private $invite;


    /**
     *
     *
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime", nullable=true)
     *
     */
    private $birthday;

    /**
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param \DateTime $update
     */
    public function setUpdate($update)
    {
        $this->update = $update;
    }


    /**
     *
     *
     * @var \DateTime
     *
     * @ORM\Column(name="update", type="datetime", nullable=true)
     *
     */
    private $update;


    /**
     * @return Invite
     */
    public function getInvite()
    {
        return $this->invite;
    }

    /**
     * @param Invite $invite
     */
    public function setInvite($invite)
    {
        $this->invite = $invite;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Author
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Author
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    /**
     * Set biographie
     *
     * @param string $biographie
     *
     * @return Author
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;

        return $this;
    }

    /**
     * Get biographie
     *
     * @return string
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLivres()
    {
        return $this->livres;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $livres
     */
    public function setLivres($livres)
    {
        $this->livres = $livres;

    }


    /**
     *
     * @Assert\IsFalse(
     *      message="Il ne doit pas y avoir de code HTML",
     *      groups= {"html"}
     * )
     * @return string
     *
     */
    public function hasBiographieHTML(){
        $match = preg_match("/<\/?[a-z]+>/", $this->biographie);
        return ($match == 1) ? true : false ;
    }





}

