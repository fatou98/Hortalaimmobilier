<?php
namespace HTL\ImmobilierBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="datereservation", type="datetime")
     */
    private $datereservation;
    /**
     * @var bol
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
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
     * Set datereservation
     *
     * @param \DateTime $datereservation
     *
     * @return Reservation
     */
    public function setDatereservation($datereservation)
    {
        $this->datereservation = $datereservation;
        return $this;
    }
    /**
     * Get datereservation
     *
     * @return \DateTime
     */
    public function getDatereservation()
    {
        return $this->datereservation;
    }
  /*  public function __construct()
{
    $this->datereservation = new \DateTime('now');
}*/
    /**
     * Set etat
     *
     * @param int $etat
     *
     * @return Reservation
     */

    public function setEtat($etat)
    {
        $this->etat = $etat;
        return $this;
    }
    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=false)
   */
  private $bien;
   /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Client",inversedBy="reservations")
   * @ORM\JoinColumn(nullable=false)
   */
  private $client;

    /**
     * Set bien
     *
     * @param \HTL\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Reservation
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
     * @return Reservation
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
          public function __toString(){

        return $this->client;
    }
}
