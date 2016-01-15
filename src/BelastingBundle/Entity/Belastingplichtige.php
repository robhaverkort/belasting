<?php

namespace BelastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Belastingplichtige
 *
 * @ORM\Table(name="belastingplichtige")
 * @ORM\Entity(repositoryClass="BelastingBundle\Repository\BelastingplichtigeRepository")
 */
class Belastingplichtige {

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
     * @var integer
     *
     * @ORM\Column(name="aftrekpostenperc", type="integer")
     */
    protected $aftrekpostenperc;

    /**
     * @var string
     *
     * @ORM\Column(name="gebdatum", type="date")
     */
    protected $gebdatum;

    /**
     * @ORM\ManyToOne(targetEntity="Huishouden", inversedBy="belastingplichtigen")
     * @ORM\JoinColumn(name="huishouden_id", referencedColumnName="id")
     */
    protected $huishouden;

    /**
     * @ORM\OneToMany(targetEntity="Werkgever", mappedBy="belastingplichtige")
     */
    protected $werkgevers;

    public function __construct() {
        $this->werkgevers = new ArrayCollection();
    }

    /*
     *  BEREKENINGEN
     */

    /**
     * Get Belastbaar inkomen
     * 
     * @return int
     */
    public function getBrutoinkomen($jaar = 2016) {
        $brutoinkomen = 0;
        foreach ($this->getWerkgevers() as $werkgever) {
            $brutoinkomen += $werkgever->getBrutosalaris(2016);
        }
        return $brutoinkomen;
    }

    public function getAftrekposten($jaar = 2016) {
        if ($this->getHuishouden()->getWoningen()[0]->getKalehuur(2016))
            return 0;
        else
            return $this->getAftrekpostenperc(2016) / 100 * $this->getHuishouden()->getWoningen()[0]->getBelastbaar(2016);
    }

    public function getBelastbaarinkomen($jaar = 2016) {
        return $this->getBrutoinkomen() + $this->getAftrekposten();
    }

    public function getInkomstenbelastingbedrag($schijf = 0) {
        switch ($schijf) {
            case 0:
                break;
            case 1:
                return min(19822, $this->getBelastbaarinkomen());
                break;
            case 2:
                return max(0, min(33589 - 19822, $this->getBelastbaarinkomen() - 19822));
                break;
            case 3:
                return max(0, min(57586 - 33589, $this->getBelastbaarinkomen() - 33589));
                break;
            case 4:
                return max(0, $this->getBelastbaarinkomen() - 57586);
                break;
        }
        return 0;
    }

    public function getInkomstenbelasting($schijf = 0) {
        switch ($schijf) {
            case 0:
                break;
            case 1:
                return 0.0835 * $this->getInkomstenbelastingbedrag(1);
                break;
            case 2:
                return 0.1385 * $this->getInkomstenbelastingbedrag(2);
                break;
            case 3:
                return 0.4200 * $this->getInkomstenbelastingbedrag(3);
                break;
            case 4:
                return 0.5200 * $this->getInkomstenbelastingbedrag(4);
                break;
        }
        return 0;
    }

    public function getPremieaowbedrag($jaar = 2016) {
        return min(33589, $this->getBelastbaarinkomen());
    }

    public function getPremieaow($jaar = 2016) {
        return 0.1790 * $this->getPremieaowbedrag();
    }

    public function getPremieanwbedrag($jaar = 2016) {
        return min(33589, $this->getBelastbaarinkomen());
    }

    public function getPremieanw($jaar = 2016) {
        return 0.0060 * $this->getPremieanwbedrag();
    }

    public function getPremiewlzbedrag($jaar = 2016) {
        return min(33589, $this->getBelastbaarinkomen());
    }

    public function getPremiewlz($jaar = 2016) {
        return 0.0965 * $this->getPremiewlzbedrag();
    }

    public function getAlgemeneheffingskorting($jaar = 2016) {
        return max(2203 - 861, 2203 - 0.0232 * max(0, ($this->getBelastbaarinkomen() - 19822)));
    }

    public function getArbeidskorting($jaar = 2016) {
        if ($this->getBelastbaarinkomen() <= 9010) {
            return 0.01810 * $this->getBelastbaarinkomen();
        } else {
            return min(2220, 0.19679 * $this->getBelastbaarinkomen()) - min(2036, 0.04 * (max(0, $this->getBelastbaarinkomen() - 49770)));
        }
    }

    public function getWerkbonus($jaar = 2016) {
        if ($this->getBelastbaarinkomen() <= 17327) {
            return 0;
        } elseif ($this->getBelastbaarinkomen() <= 19252) {
            return 0.5810 * ($this->getBelastbaarinkomen() - 17327);
        } elseif ($this->getBelastbaarinkomen() <= 23104) {
            return 1119;
        } elseif ($this->getBelastbaarinkomen() <= 33694) {
            return 1119 - 0.10567 * ($this->getBelastbaarinkomen() - 23104);
        } else {
            return 0;
        }
    }

    public function hasFiscalepartner($jaar = 2016) {
        return sizeof($this->getHuishouden()->getBelastingplichtigen()) > 1;
    }

    public function isMinstverdienend($jaar = 2016) {
        $belastingplichtigen = $this->getHuishouden()->getBelastingplichtigen();
        if (sizeof($belastingplichtigen) != 2)
            return false;
        if ($this === $belastingplichtigen[0]) {
            if ($this->getBrutoinkomen() < $belastingplichtigen[1]->getBrutoinkomen()) {
                return true;
            } else {
                return false;
            }
        }
        if ($this === $belastingplichtigen[1]) {
            if ($this->getBrutoinkomen() < $belastingplichtigen[0]->getBrutoinkomen()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getCombinatiekorting($jaar = 2016) {
// kind jonger dan 12 jaar op 1 jan
// geen partner of minst verdienend
        if (
                $this->getHuishouden()->haskind12() &&
                (!$this->hasFiscalepartner() || $this->isMinstverdienend())
        )
            return $this->getBrutoinkomen() > 4857 ? min(2152, 1033 + 0.04 * $this->getBrutoinkomen()) : 0;
    }

    public function getInhoudingen($jaar = 2016) {
        return
                $this->getInkomstenbelasting(1) +
                $this->getInkomstenbelasting(2) +
                $this->getInkomstenbelasting(3) +
                $this->getInkomstenbelasting(4) +
                $this->getPremieaow() +
                $this->getPremieanw() +
                $this->getPremiewlz();
    }

    public function getHeffingskortingen($jaar = 2016) {
        return
                $this->getAlgemeneheffingskorting() +
                $this->getArbeidskorting() +
                $this->getWerkbonus() +
                $this->getCombinatiekorting();
    }

    public function getHeffingskortingeneff($jaar = 2016) {
        return min($this->getHeffingskortingen(), $this->getInhoudingen());
    }

    public function getNettoinkomen($jaar = 2016) {
        return
                $this->getBrutoinkomen() -
                $this->getInhoudingen() +
                $this->getHeffingskortingeneff();
    }

    /*
     *  BEREKENINGEN
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
     * @return Belastingplichtige
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
     * @return Belastingplichtige
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
     * @return Belastingplichtige
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
     * Add werkgever
     *
     * @param \BelastingBundle\Entity\Werkgever $werkgever
     *
     * @return Belastingplichtige
     */
    public function addWerkgever(\BelastingBundle\Entity\Werkgever $werkgever) {
        $this->werkgevers[] = $werkgever;

        return $this;
    }

    /**
     * Remove werkgever
     *
     * @param \BelastingBundle\Entity\Werkgever $werkgever
     */
    public function removeWerkgever(\BelastingBundle\Entity\Werkgever $werkgever) {
        $this->werkgevers->removeElement($werkgever);
    }

    /**
     * Get werkgevers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWerkgevers() {
        return $this->werkgevers;
    }

    /**
     * Set aftrekpostenperc
     *
     * @param integer $aftrekpostenperc
     *
     * @return Belastingplichtige
     */
    public function setAftrekpostenperc($aftrekpostenperc) {
        $this->aftrekpostenperc = $aftrekpostenperc;

        return $this;
    }

    /**
     * Get aftrekpostenperc
     *
     * @return integer
     */
    public function getAftrekpostenperc() {
        return $this->aftrekpostenperc;
    }

}
