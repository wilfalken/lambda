<?php

namespace Lambda\LambdaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_destinataire", columns={"idUserDest"}), @ORM\Index(name="fk_expediteur", columns={"idUserExp"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMessage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=50, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="text", length=65535, nullable=false)
     */
    private $corps;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeMessage", type="integer", nullable=false)
     */
    private $typemessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoi", type="datetime", nullable=false)
     */
    private $dateenvoi;

    /**
     * @var \Lambda\LambdaBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Lambda\LambdaBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUserDest", referencedColumnName="id")
     * })
     */
    private $iduserdest;

    /**
     * @var \Lambda\LambdaBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Lambda\LambdaBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUserExp", referencedColumnName="id")
     * })
     */
    private $iduserexp;



    /**
     * Get idmessage
     *
     * @return integer
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Message
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set corps
     *
     * @param string $corps
     *
     * @return Message
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set typemessage
     *
     * @param integer $typemessage
     *
     * @return Message
     */
    public function setTypemessage($typemessage)
    {
        $this->typemessage = $typemessage;

        return $this;
    }

    /**
     * Get typemessage
     *
     * @return integer
     */
    public function getTypemessage()
    {
        return $this->typemessage;
    }

    /**
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return Message
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set iduserdest
     *
     * @param \Lambda\LambdaBundle\Entity\User $iduserdest
     *
     * @return Message
     */
    public function setIduserdest(\Lambda\LambdaBundle\Entity\User $iduserdest = null)
    {
        $this->iduserdest = $iduserdest;

        return $this;
    }

    /**
     * Get iduserdest
     *
     * @return \Lambda\LambdaBundle\Entity\User
     */
    public function getIduserdest()
    {
        return $this->iduserdest;
    }

    /**
     * Set iduserexp
     *
     * @param \Lambda\LambdaBundle\Entity\User $iduserexp
     *
     * @return Message
     */
    public function setIduserexp(\Lambda\LambdaBundle\Entity\User $iduserexp = null)
    {
        $this->iduserexp = $iduserexp;

        return $this;
    }

    /**
     * Get iduserexp
     *
     * @return \Lambda\LambdaBundle\Entity\User
     */
    public function getIduserexp()
    {
        return $this->iduserexp;
    }
}
