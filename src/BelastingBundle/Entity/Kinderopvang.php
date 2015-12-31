<?php

namespace BelastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kinderopvang
 *
 * @ORM\Table(name="kinderopvang")
 * @ORM\Entity(repositoryClass="BelastingBundle\Repository\KinderopvangRepository")
 */
class Kinderopvang {

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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=8)
     */
    protected $type;

    /**
     * @var int
     *
     * @ORM\Column(name="uren", type="integer")
     */
    protected $uren;

    /**
     * @var decimal
     *
     * @ORM\Column(name="uurprijs", type="decimal", scale=2)
     */
    protected $uurprijs;

    /**
     * @ORM\ManyToOne(targetEntity="Kind", inversedBy="kinderopvang")
     * @ORM\JoinColumn(name="kind_id", referencedColumnName="id")
     */
    protected $kind;

    /*
     *  BEREKENINGEN
     */

    /**
     * Get kosten
     *
     * @return float
     */
    public function getKosten() {
        return $this->getUren() * $this->getUurprijs();
    }

    /*
     *  END BEREKENINGEN
     */

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
     * @return Kinderopvang
     */
    public function setNaam($naam) {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam() {
        return $this->naam;
    }

    /**
     * Set uren
     *
     * @param integer $uren
     *
     * @return Kinderopvang
     */
    public function setUren($uren) {
        $this->uren = $uren;

        return $this;
    }

    /**
     * Get uren
     *
     * @return integer
     */
    public function getUren() {
        return $this->uren;
    }

    /**
     * Set uurprijs
     *
     * @param string $uurprijs
     *
     * @return Kinderopvang
     */
    public function setUurprijs($uurprijs) {
        $this->uurprijs = $uurprijs;

        return $this;
    }

    /**
     * Get uurprijs
     *
     * @return string
     */
    public function getUurprijs() {
        return $this->uurprijs;
    }

    /**
     * Set kind
     *
     * @param \BelastingBundle\Entity\Kind $kind
     *
     * @return Kinderopvang
     */
    public function setKind(\BelastingBundle\Entity\Kind $kind = null) {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return \BelastingBundle\Entity\Kind
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Kinderopvang
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

}
