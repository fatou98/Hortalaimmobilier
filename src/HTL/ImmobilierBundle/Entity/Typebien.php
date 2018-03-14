<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typebien
 *
 * @ORM\Table(name="typebien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\TypebienRepository")
 */
class Typebien
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
     * @ORM\Column(name="libelletype", type="string", length=30, nullable=true)
     */
    private $libelletype;


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
     * Set libelletype
     *
     * @param string $libelletype
     *
     * @return Typebien
     */
    public function setLibelletype($libelletype)
    {
        $this->libelletype = $libelletype;

        return $this;
    }

    /**
     * Get libelletype
     *
     * @return string
     */
    public function getLibelletype()
    {
        return $this->libelletype;
    }
     public function __toString(){

        return $this->libelletype;
    }
}

