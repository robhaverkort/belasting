<?php

namespace BelastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Werkgever
 *
 * @ORM\Table(name="werkgever")
 * @ORM\Entity(repositoryClass="BelastingBundle\Repository\WerkgeverRepository")
 */
class Werkgever {

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
     * @ORM\Column(name="naam", type="string", length=64)
     */
    protected $naam;

    /**
     * @var int
     *
     * @ORM\Column(name="brutosalaris", type="integer")
     */
    protected $brutosalaris;

    /**
     * @ORM\ManyToOne(targetEntity="Belastingplichtige", inversedBy="werkgevers")
     * @ORM\JoinColumn(name="belastingplichtige_id", referencedColumnName="id")
     */
    protected $belastingplichtige;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Werkgever
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set brutosalaris
     *
     * @param integer $brutosalaris
     *
     * @return Werkgever
     */
    public function setBrutosalaris($brutosalaris)
    {
        $this->brutosalaris = $brutosalaris;

        return $this;
    }

    /**
     * Get brutosalaris
     *
     * @return integer
     */
    public function getBrutosalaris()
    {
        return $this->brutosalaris;
    }

    /**
     * Set belastingplichtige
     *
     * @param \BelastingBundle\Entity\Belastingplichtige $belastingplichtige
     *
     * @return Werkgever
     */
    public function setBelastingplichtige(\BelastingBundle\Entity\Belastingplichtige $belastingplichtige = null)
    {
        $this->belastingplichtige = $belastingplichtige;

        return $this;
    }

    /**
     * Get belastingplichtige
     *
     * @return \BelastingBundle\Entity\Belastingplichtige
     */
    public function getBelastingplichtige()
    {
        return $this->belastingplichtige;
    }
}
