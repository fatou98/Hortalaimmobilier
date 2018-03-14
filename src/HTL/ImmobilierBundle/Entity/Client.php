<?php
namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ClientRepository")
 */
class Client
{

// your own logic

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var int
     *
     * @ORM\Column(name="numpiece", type="integer", unique=true, length=30)
     */
    private $numpiece;
    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=50)
     */
    private $nomComplet;
    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", unique=false)
     */
    private $tel;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;
 /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;
 /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;
    /**
   * @ORM\OneToMany(targetEntity="HTL\ImmobilierBundle\Entity\Reservation",mappedBy="client")
   * @ORM\JoinColumn(nullable=false)
   */
  private $reservations;

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
     * Set numpiece
     *
     * @param integer $numpiece
     *
     * @return Client
     */
    public function setNumpiece($numpiece)
    {
        $this->numpiece = $numpiece;
        return $this;
    }
    /**
     * Get numpiece
     *
     * @return int
     */
    public function getNumpiece()
    {
        return $this->numpiece;
    }
    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Client
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
        return $this;
    }
    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }
    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }
    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }
    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
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
    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Get adresse
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
     /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Get adresse
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

}