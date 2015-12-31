<?php

namespace BelastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Woning
 *
 * @ORM\Table(name="woning")
 * @ORM\Entity(repositoryClass="BelastingBundle\Repository\WoningRepository")
 */
class Woning {

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
     * @ORM\Column(name="adres", type="string", length=128)
     */
    protected $adres;

    /**
     * @var int
     *
     * @ORM\Column(name="wozwaarde", type="integer", nullable=true)
     */
    protected $wozwaarde;

    /**
     * @var int
     *
     * @ORM\Column(name="betaalderente", type="integer", nullable=true)
     */
    protected $betaalderente;

    /**
     * @var int
     *
     * @ORM\Column(name="kalehuur", type="integer", nullable=true)
     */
    protected $kalehuur;

    /**
     * @var int
     *
     * @ORM\Column(name="servicekosten", type="integer", nullable=true)
     */
    protected $servicekosten;

    /**
     * @ORM\ManyToOne(targetEntity="Huishouden", inversedBy="woningen")
     * @ORM\JoinColumn(name="huishouden_id", referencedColumnName="id")
     */
    protected $huishouden;

    /*
     *  BEREKENINGEN
     */

    public function getEigenwoningforfait($jaar = 2015) {
        $ewf = 0;
        switch ($jaar) {
            case 2015:
                if ($this->getWozwaarde() > 12500)
                    $ewf = 0.0030 * $this->getWozwaarde();
                if ($this->getWozwaarde() > 25000)
                    $ewf = 0.0045 * $this->getWozwaarde();
                if ($this->getWozwaarde() > 50000)
                    $ewf = 0.0060 * $this->getWozwaarde();
                if ($this->getWozwaarde() > 75000)
                    $ewf = 0.0075 * $this->getWozwaarde();
                if ($this->getWozwaarde() > 25000)
                    $ewf = 0.0045 * $this->getWozwaarde();
                if ($this->getWozwaarde() > 1050000)
                    $ewf = 7875 + 0.0205 * ($this->getWozwaarde() - 1050000);
                break;
        }
        return $ewf;
    }

    public function getBelastbaar($jaar = 2015) {
        return $this->getEigenwoningforfait($jaar) - $this->getBetaalderente();
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
     * Set wozwaarde
     *
     * @param integer $wozwaarde
     *
     * @return Woning
     */
    public function setWozwaarde($wozwaarde) {
        $this->wozwaarde = $wozwaarde;

        return $this;
    }

    /**
     * Get wozwaarde
     *
     * @return integer
     */
    public function getWozwaarde() {
        return $this->wozwaarde;
    }

    /**
     * Set betaalderente
     *
     * @param integer $betaalderente
     *
     * @return Woning
     */
    public function setBetaalderente($betaalderente) {
        $this->betaalderente = $betaalderente;

        return $this;
    }

    /**
     * Get betaalderente
     *
     * @return integer
     */
    public function getBetaalderente() {
        return $this->betaalderente;
    }

    /**
     * Set kalehuur
     *
     * @param integer $kalehuur
     *
     * @return Woning
     */
    public function setKalehuur($kalehuur) {
        $this->kalehuur = $kalehuur;

        return $this;
    }

    /**
     * Get kalehuur
     *
     * @return integer
     */
    public function getKalehuur() {
        return $this->kalehuur;
    }

    /**
     * Set servicekosten
     *
     * @param integer $servicekosten
     *
     * @return Woning
     */
    public function setServicekosten($servicekosten) {
        $this->servicekosten = $servicekosten;

        return $this;
    }

    /**
     * Get servicekosten
     *
     * @return integer
     */
    public function getServicekosten() {
        return $this->servicekosten;
    }

    /**
     * Set huishouden
     *
     * @param \BelastingBundle\Entity\Huishouden $huishouden
     *
     * @return Woning
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
     * Set adres
     *
     * @param string $adres
     *
     * @return Woning
     */
    public function setAdres($adres) {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres() {
        return $this->adres;
    }

}
