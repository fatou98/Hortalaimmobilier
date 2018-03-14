<?php

namespace HTL\ImmobilierBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="dateContrat", type="datetime")
     */
    private $dateContrat;
    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;
    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=80)
     */
    private $duree;
    /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=true)
   */
  private $bien;
  /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Client")
   * @ORM\JoinColumn(nullable=true)
   */
  private $client;
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
     * Set dateContrat
     *
     * @param \DateTime $dateContrat
     *
     * @return Contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;
        return $this;
    }
    /**
     * Get dateContrat
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }
    /**
     * Set caution
     *
     * @param integer $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;
        return $this;
    }
    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }
    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
        return $this;
    }
    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set bien
     *
     * @param \HTL\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Contrat
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
     * Set client
     *
     * @param \HTL\ImmobilierBundle\Entity\Client $client
     *
     * @return Contrat
     */
    public function setClient(\HTL\ImmobilierBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \HTL\ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}