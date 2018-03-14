<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProprietaireBien
 *
 * @ORM\Table(name="proprietaire_bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ProprietaireBienRepository")
 */
class ProprietaireBien
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
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;


    /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Proprietaire")

   * @ORM\JoinColumn(nullable=false)

   */

  private $proprietaire;

  /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")

   * @ORM\JoinColumn(nullable=false)

   */

  private $bien;


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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return ProprietaireBien
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
