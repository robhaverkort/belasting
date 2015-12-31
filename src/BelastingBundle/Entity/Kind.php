<?php

namespace BelastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kind
 *
 * @ORM\Table(name="kind")
 * @ORM\Entity(repositoryClass="BelastingBundle\Repository\KindRepository")
 */
class Kind {

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
     * @ORM\Column(name="gebdatum", type="date")
     */
    protected $gebdatum;

    /**
     * @ORM\ManyToOne(targetEntity="Huishouden", inversedBy="kinderen")
     * @ORM\JoinColumn(name="huishouden_id", referencedColumnName="id")
     */
    protected $huishouden;

    /**
     * @ORM\OneToMany(targetEntity="Kinderopvang", mappedBy="kind")
     */
    protected $kinderopvang;

    /*
     *  BEREKENINGEN
     */

    public function getLeeftijd($jaar = null, $maand = null) {
        if (!$jaar && !$maand) {
            $rekenmaand = new \DateTime('now');
        } else {
            $rekenmaand = new \DateTime($jaar . '/' . $maand . '/01');
            return $rekenmaand->diff($this->gebdatum)->format('%y');
        }
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
     * Constructor
     */
    public function __construct() {
        $this->kinderopvang = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Kind
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
     * Set gebdatum
     *
     * @param \DateTime $gebdatum
     *
     * @return Kind
     */
    public function setGebdatum($gebdatum) {
        $this->gebdatum = $gebdatum;

        return $this;
    }

    /**
     * Get gebdatum
     *
     * @return \DateTime
     */
    public function getGebdatum() {
        return $this->gebdatum;
    }

    /**
     * Set huishouden
     *
     * @param \BelastingBundle\Entity\Huishouden $huishouden
     *
     * @return Kind
     */
    public function setHuishouden(\BelastingBundle\Entity\Huishouden $huishouden = null) {
        $this->huishouden = $huishouden;

        return $this;
    }

    /**
     * Get huishouden
     *
     * @return \BelastingBundle\Entity\Huishouden
     */
    public function getHuishouden() {
        return $this->huishouden;
    }

    /**
     * Add kinderopvang
     *
     * @param \BelastingBundle\Entity\Kinderopvang $kinderopvang
     *
     * @return Kind
     */
    public function addKinderopvang(\BelastingBundle\Entity\Kinderopvang $kinderopvang) {
        $this->kinderopvang[] = $kinderopvang;

        return $this;
    }

    /**
     * Remove kinderopvang
     *
     * @param \BelastingBundle\Entity\Kinderopvang $kinderopvang
     */
    public function removeKinderopvang(\BelastingBundle\Entity\Kinderopvang $kinderopvang) {
        $this->kinderopvang->removeElement($kinderopvang);
    }

    /**
     * Get kinderopvang
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKinderopvang() {
        return $this->kinderopvang;
    }

}
