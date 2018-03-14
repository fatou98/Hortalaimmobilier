<?php
namespace HTL\ImmobilierBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\BienRepository")
 */
class Bien
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
     * @ORM\Column(name="nombien", type="string", length=30,nullable=true)
     */
    private $nombien;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean",nullable=true)
     */
    private $etat;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text",nullable=true)
     */
    private $description;
    /**
     * @var int
     *
     * @ORM\Column(name="prixlocation", type="integer",nullable=true)
     */
    private $prixlocation;

    /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=true)
   */
    private $parentbien;
     /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Localite")
   * @ORM\JoinColumn(nullable=true)
   */
    private $libellelocalite;
    /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Typebien")
   * @ORM\JoinColumn(nullable=true)
   */
    private $typebien;
 /**
   * @ORM\OneToMany(targetEntity="HTL\ImmobilierBundle\Entity\Image", mappedBy="bien")
   * @ORM\JoinColumn(nullable=true)
   */
    private $images;

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
     * Set nombien
     *
     * @param string $nombien
     *
     * @return Bien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;
        return $this;
    }
    /**
     * Get nombien
     *
     * @return string
     */
    public function getNombien()
    {
        return $this->nombien;
    }
    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
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
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set prixlocation
     *
     * @param integer $prixlocation
     *
     * @return Bien
     */
    public function setPrixlocation($prixlocation)
    {
        $this->prixlocation = $prixlocation;
        return $this;
    }
    /**
     * Get prixlocation
     *
     * @return int
     */
    public function getPrixlocation()
    {
        return $this->prixlocation;
    }

   public function setLibellelocalite(\HTL\ImmobilierBundle\Entity\Localite $libellelocalite)
    {
        $this->libellelocalite = $libellelocalite;

        return $this;
    }
    /**
     * Get bien
     *
     * @return \HTL\ImmobilierBundle\Entity\Bien
     */
    public function getLibellelocalite()
    {
        return $this->libellelocalite;
    }

    public function setTypebien(\HTL\ImmobilierBundle\Entity\Typebien $typebien)
    {
        $this->typebien = $typebien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \HTL\ImmobilierBundle\Entity\Bien
     */
    public function getTypebien()
    {
        return $this->typebien;
    }

  public function __construct()

  {

    $this->images = new ArrayCollection();

    // ...

  }


  public function addImage(\HTL\ImmobilierBundle\Entity\Image $image)

  {

    $this->image[] = $image;

  }


  public function removeImage(\HTL\ImmobilierBundle\Entity\Image $image)

  {

    $this->images->removeElement($image);

  }


  public function getImages()

  {

    return $this->images;

  }
      public function __toString(){

        return $this->images;
    }
}