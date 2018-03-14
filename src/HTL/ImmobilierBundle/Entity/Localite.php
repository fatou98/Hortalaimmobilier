<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\LocaliteRepository")
 */
class Localite
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
     * @ORM\Column(name="libellelocalite", type="string", length=30)
     */
    private $libellelocalite;

/**

   * @ORM\OneToMany(targetEntity="HTL\ImmobilierBundle\Entity\Bien", mappedBy="localite")

   */
    private $biens;

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
     * Set libellelocalite
     *
     * @param string $libellelocalite
     *
     * @return Localite
     */
    public function setLibellelocalite($libellelocalite)
    {
        $this->libellelocalite = $libellelocalite;

        return $this;
    }

    /**
     * Get libellelocalite
     *
     * @return string
     */
    public function getLibellelocalite()
    {
        return $this->libellelocalite;
    }
     public function __toString(){

        return $this->libellelocalite;
    }
}
