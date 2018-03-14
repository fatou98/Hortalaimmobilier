<?php
namespace HTL\ImmobilierBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="datepaiement", type="datetime")
     */
    private $datepaiement;
    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode", type="datetime")
     */
    private $periode;
     /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Contrat")
   * @ORM\JoinColumn(nullable=true)
   */
  private $contrat;
   
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
     * Set datepaiement
     *
     * @param \DateTime $datepaiement
     *
     * @return Paiement
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;
        return $this;
    }
    /**
     * Get datepaiement
     *
     * @return int
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }
    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
        return $this;
    }
    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * Set periode
     *
     * @param \DateTime $periode
     *
     * @return Paiement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
        return $this;
    }
    /**
     * Get periode
     *
     * @return int
     */
    public function getPeriode()
    {
        return $this->periode;
    }
     /**
     * Set contrat
     *
     * @param \HTL\ImmobilierBundle\Entity\Contrat $contrat
     *
     * @return Paiement
     */
    public function setContrat(\HTL\ImmobilierBundle\Entity\Contrat $contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \HTL\ImmobilierBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }
}