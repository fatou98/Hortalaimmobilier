<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeBail
 *
 * @ORM\Table(name="demande_bail")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\DemandeBailRepository")
 */
class DemandeBail
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
     * @var \DateTime
     *
     * @ORM\Column(name="datedemande", type="datetime")
     */
    private $datedemande;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
/**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=false)
   */
    private $bien;
/**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Proprietaire")
   * @ORM\JoinColumn(nullable=false)
   */
    private $proprietaire;


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
     * Set datedemande
     *
     * @param \DateTime $datedemande
     *
     * @return DemandeBail
     */
    public function setDatedemande($datedemande)
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    /**
     * Get datedemande
     *
     * @return \DateTime
     */
    public function getDatedemande()
    {
        return $this->datedemande;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return DemandeBail
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set bien
     *
     * @param \HTL\ImmobilierBundle\Entity\Bien $bien
     *
     * @return DemandeBail
     */
    public function setBien(\HTL\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \HTL\ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set proprietaire
     *
     * @param \HTL\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return DemandeBail
     */
    public function setProprietaire(\HTL\ImmobilierBundle\Entity\Proprietaire $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \HTL\ImmobilierBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
