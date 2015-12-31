<?php

namespace BelastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Huishouden
 *
 * @ORM\Table(name="huishouden")
 * @ORM\Entity(repositoryClass="BelastingBundle\Repository\HuishoudenRepository")
 */
class Huishouden {

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
     * @ORM\OneToMany(targetEntity="Belastingplichtige", mappedBy="huishouden")
     */
    protected $belastingplichtigen;

    /**
     * @ORM\OneToMany(targetEntity="Kind", mappedBy="huishouden")
     */
    protected $kinderen;

    /**
     * @ORM\OneToMany(targetEntity="Woning", mappedBy="huishouden")
     */
    protected $woningen;

    public function __construct() {
        $this->belastingplichtigen = new ArrayCollection();
        $this->kinderen = new ArrayCollection();
        $this->woningen = new ArrayCollection();
    }

    /*
     *  BEREKENINGEN
     */

    public function getVerzamelinkomen() {
        $verzamelinkomen = 0;
        foreach ($this->getBelastingplichtigen() as $belastingplichtige) {
            $verzamelinkomen += $belastingplichtige->getBelastbaarinkomen();
        }
        return $verzamelinkomen;
    }

    public function getZorgtoeslag() {
        $toeslag[] = [0, 78, 149];
        $toeslag[] = [19000, 78, 149];
        $toeslag[] = [19500, 78, 148];
        $toeslag[] = [20000, 72, 143];
        $toeslag[] = [20500, 66, 137];
        $toeslag[] = [21000, 61, 132];
        $toeslag[] = [21500, 55, 126];
        $toeslag[] = [22000, 50, 120];
        $toeslag[] = [22500, 44, 115];
        $toeslag[] = [23000, 39, 109];
        $toeslag[] = [23500, 33, 104];
        $toeslag[] = [24000, 27, 98];
        $toeslag[] = [24500, 22, 93];
        $toeslag[] = [25000, 16, 87];
        $toeslag[] = [25500, 11, 81];
        $toeslag[] = [26000, 5, 76];
        $toeslag[] = [26500, 0, 70];
        $toeslag[] = [27000, 0, 65];
        $toeslag[] = [27500, 0, 59];
        $toeslag[] = [28000, 0, 53];
        $toeslag[] = [28500, 0, 48];
        $toeslag[] = [29000, 0, 42];
        $toeslag[] = [29500, 0, 37];
        $toeslag[] = [30000, 0, 31];
        $toeslag[] = [30500, 0, 26];
        $toeslag[] = [31000, 0, 20];
        $toeslag[] = [31500, 0, 14];
        $toeslag[] = [32000, 0, 9];
        $toeslag[] = [32500, 0, 3];
        $toeslag[] = [33000, 0, 0];
        end($toeslag);
        while ($this->getVerzamelinkomen() < current($toeslag)[0])
            prev($toeslag);
        return 12 * current($toeslag)[2];
    }

    public function getHuurtoeslag() {
        return 0;
    }

    public function getKinderbijslagkwartaal($jaar = NULL, $kwartaal = NULL) {
        switch($kwartaal){
            case 1:
                $maand=1;
                break;
            case 2:
                $maand=4;
                break;
            case 3:
                $maand=7;
                break;
            case 4:
                $maand=10;
                break;
        }
        $kinderbijslag = 0;
        foreach ($this->getKinderen() as $kind) {
            if ($kind->getLeeftijd($jaar, $maand) <= 5) {
                $kinderbijslag += 191.65;
            } elseif ($kind->getLeeftijd($jaar, $maand) <= 11) {
                $kinderbijslag += 232.71;
            } elseif ($kind->getLeeftijd($jaar, $maand) <= 17) {
                $kinderbijslag += 273.78;
            }
        }
        return $kinderbijslag;
    }

    public function getKinderbijslag($jaar) {
        return
                $this->getKinderbijslagkwartaal(2015, 1) +
                $this->getKinderbijslagkwartaal(2015, 2) +
                $this->getKinderbijslagkwartaal(2015, 3) +
                $this->getKinderbijslagkwartaal(2015, 4);
    }

    public function getKinderopvangtoeslagpercentage($jaar, $kind) {
        // 2015
        $kotp[2015][] = [0, 90.7, 93.3];
        $kotp[2015][] = [17919, 89.1, 93.3];
        $kotp[2015][] = [19112, 88.1, 93.3];
        $kotp[2015][] = [20304, 87.4, 92.9];
        $kotp[2015][] = [21497, 86.7, 92.9];
        $kotp[2015][] = [22691, 86, 92.9];
        $kotp[2015][] = [23883, 85, 92.9];
        $kotp[2015][] = [25077, 84.2, 92.9];
        $kotp[2015][] = [26266, 83.4, 92.7];
        $kotp[2015][] = [27550, 82.6, 92.2];
        $kotp[2015][] = [28832, 81.5, 91.9];
        $kotp[2015][] = [30115, 80.9, 91.6];
        $kotp[2015][] = [31398, 79.9, 91.6];
        $kotp[2015][] = [32682, 79, 91.4];
        $kotp[2015][] = [33965, 78.2, 91.];
        $kotp[2015][] = [35279, 77.3, 90.8];
        $kotp[2015][] = [36595, 76.5, 90.6];
        $kotp[2015][] = [37910, 75.6, 90.];
        $kotp[2015][] = [39225, 74.5, 89.8];
        $kotp[2015][] = [40542, 74, 89.5];
        $kotp[2015][] = [41858, 73, 89.5];
        $kotp[2015][] = [43173, 72.3, 89.2];
        $kotp[2015][] = [44488, 71.2, 89.];
        $kotp[2015][] = [45926, 69.4, 88.5];
        $kotp[2015][] = [48744, 68.5, 87.7];
        $kotp[2015][] = [51563, 67.1, 87.1];
        $kotp[2015][] = [54383, 64.5, 86.6];
        $kotp[2015][] = [57203, 61.8, 86.3];
        $kotp[2015][] = [60021, 59.1, 85.5];
        $kotp[2015][] = [62841, 56.3, 85.];
        $kotp[2015][] = [65660, 53.5, 84.4];
        $kotp[2015][] = [68479, 50.9, 83.6];
        $kotp[2015][] = [71300, 48.2, 83.1];
        $kotp[2015][] = [74118, 45.5, 82.6];
        $kotp[2015][] = [76939, 42.6, 82.3];
        $kotp[2015][] = [79758, 39.9, 81.5];
        $kotp[2015][] = [82575, 37.3, 81.1];
        $kotp[2015][] = [85394, 34.5, 80.5];
        $kotp[2015][] = [88270, 32, 79.7];
        $kotp[2015][] = [91158, 29.6, 79.2];
        $kotp[2015][] = [94045, 27, 78.8];
        $kotp[2015][] = [96931, 24.4, 78.4];
        $kotp[2015][] = [99819, 21.7, 77.6];
        $kotp[2015][] = [102706, 19, 77.];
        $kotp[2015][] = [105594, 18, 76.5];
        $kotp[2015][] = [108481, 18, 75.9];
        $kotp[2015][] = [111367, 18, 75.5];
        $kotp[2015][] = [114255, 18, 74.7];
        $kotp[2015][] = [117142, 18, 74.1];
        $kotp[2015][] = [120029, 18, 73.];
        $kotp[2015][] = [122916, 18, 72.6];
        $kotp[2015][] = [125802, 18, 71.8];
        $kotp[2015][] = [128690, 18, 70.7];
        $kotp[2015][] = [131579, 18, 70.1];
        $kotp[2015][] = [134465, 18, 69.1];
        $kotp[2015][] = [137352, 18, 68.5];
        $kotp[2015][] = [140239, 18, 67.7];
        $kotp[2015][] = [143127, 18, 67.];
        $kotp[2015][] = [146014, 18, 66.2];
        $kotp[2015][] = [148901, 18, 65.1];
        $kotp[2015][] = [151787, 18, 64.5];
        $kotp[2015][] = [154674, 18, 63.7];
        $kotp[2015][] = [157562, 18, 62.9];
        $kotp[2015][] = [160449, 18, 62.1];
        $kotp[2015][] = [163336, 18, 61.4];
        $kotp[2015][] = [166224, 18, 60.6];
        $kotp[2015][] = [169111, 18, 59.8];
        $kotp[2015][] = [171998, 18, 59.2];
        $kotp[2015][] = [174885, 18, 58.2];
        // 2016
        $kotp[2016][] = [0, 93, 94];
        $kotp[2016][] = [18177, 93, 94];
        $kotp[2016][] = [19387, 93, 94];
        $kotp[2016][] = [20596, 93, 94];
        $kotp[2016][] = [21807, 92.5, 94];
        $kotp[2016][] = [23018, 91.8, 94];
        $kotp[2016][] = [24227, 90.8, 94];
        $kotp[2016][] = [25438, 90, 94];
        $kotp[2016][] = [26644, 89.2, 94];
        $kotp[2016][] = [27947, 88.4, 94];
        $kotp[2016][] = [29247, 87.3, 94];
        $kotp[2016][] = [30549, 86.7, 94];
        $kotp[2016][] = [31850, 85.7, 94];
        $kotp[2016][] = [33153, 84.8, 94];
        $kotp[2016][] = [34454, 84, 94];
        $kotp[2016][] = [35787, 83.1, 94];
        $kotp[2016][] = [37122, 82.3, 94];
        $kotp[2016][] = [38456, 81.4, 94];
        $kotp[2016][] = [39790, 80.3, 94];
        $kotp[2016][] = [41126, 79.8, 94];
        $kotp[2016][] = [42461, 78.8, 94];
        $kotp[2016][] = [43795, 78.1, 94];
        $kotp[2016][] = [45129, 77, 94];
        $kotp[2016][] = [46587, 75.2, 94];
        $kotp[2016][] = [49446, 74.3, 93.5];
        $kotp[2016][] = [52305, 72.9, 92.9];
        $kotp[2016][] = [55166, 70.3, 92.4];
        $kotp[2016][] = [58027, 67.6, 92.1];
        $kotp[2016][] = [60885, 64.9, 91.3];
        $kotp[2016][] = [63746, 62.1, 90.8];
        $kotp[2016][] = [66605, 59.3, 90.2];
        $kotp[2016][] = [69465, 56.7, 89.4];
        $kotp[2016][] = [72327, 54, 88.9];
        $kotp[2016][] = [75185, 51.3, 88.4];
        $kotp[2016][] = [78047, 48.4, 88.1];
        $kotp[2016][] = [80907, 45.7, 87.3];
        $kotp[2016][] = [83764, 43.1, 86.9];
        $kotp[2016][] = [86624, 40.3, 86.3];
        $kotp[2016][] = [89541, 37.8, 85.5];
        $kotp[2016][] = [92471, 35.4, 85];
        $kotp[2016][] = [95399, 32.8, 84.6];
        $kotp[2016][] = [98327, 30.2, 84.2];
        $kotp[2016][] = [101256, 27.5, 83.4];
        $kotp[2016][] = [104185, 24.8, 82.8];
        $kotp[2016][] = [107115, 23.8, 82.3];
        $kotp[2016][] = [110043, 23.8, 81.7];
        $kotp[2016][] = [112971, 23.8, 81.3];
        $kotp[2016][] = [115900, 23.8, 80.5];
        $kotp[2016][] = [118829, 23.8, 79.9];
        $kotp[2016][] = [121757, 23.8, 78.8];
        $kotp[2016][] = [124686, 23.8, 78.4];
        $kotp[2016][] = [127614, 23.8, 77.6];
        $kotp[2016][] = [130543, 23.8, 76.5];
        $kotp[2016][] = [133474, 23.8, 75.9];
        $kotp[2016][] = [136401, 23.8, 74.9];
        $kotp[2016][] = [139330, 23.8, 74.3];
        $kotp[2016][] = [142258, 23.8, 73.5];
        $kotp[2016][] = [145188, 23.8, 72.8];
        $kotp[2016][] = [148117, 23.8, 72];
        $kotp[2016][] = [151045, 23.8, 70.9];
        $kotp[2016][] = [153973, 23.8, 70.3];
        $kotp[2016][] = [156901, 23.8, 69.5];
        $kotp[2016][] = [159831, 23.8, 68.7];
        $kotp[2016][] = [162759, 23.8, 67.9];
        $kotp[2016][] = [165688, 23.8, 67.2];
        $kotp[2016][] = [168618, 23.8, 66.4];
        $kotp[2016][] = [171546, 23.8, 65.6];
        $kotp[2016][] = [174475, 23.8, 65];
        $kotp[2016][] = [177403, 23.8, 64];
        foreach ($kotp[$jaar] as $kotp) {
            if ($this->getVerzamelinkomen() > $kotp[0]) {
                return $kotp[min(2, $kind)];
            }
        }
        return 0;
    }

    public function getKinderopvangtoeslag() {
        $kinderen = $this->getKinderen();
        foreach ($kinderen as $kind) {
            $kinderopvang = $kind->getKinderopvang();
        }
        return 0;
    }

    public function getKindgebondenbudgetmaand($jaar = 2015, $maand = 0) {
        // 2015
        $kgb[2015][0] = 0;
        $kgb[2015][1] = 1032;
        $kgb[2015][2] = 1823;
        $kgb[2015][3] = 2006;
        $kgb[2015]['extrakind'] = 106;
        $kgb[2015]['VH12Plus'] = 231;
        $kgb[2015]['VH16Plus'] = 412;
        $kgb[2015]['VHgeenTP'] = 3050;
        $kgb[2015]['Tslg'] = 6.75;
        $kgb[2015]['Drempel'] = 19463;
        // 2016
        $kgb[2016][1] = 1038;
        $kgb[2016][2] = 1866;
        $kgb[2016][3] = 2150;
        $kgb[2016]['extrakind'] = 284;
        $kgb[2016]['VH12Plus'] = 233;
        $kgb[2016]['VH16Plus'] = 415;
        $kgb[2016]['VHgeenTP'] = 3066;
        $kgb[2016]['Tslg'] = 6.75;
        $kgb[2016]['Drempel'] = 19758;

// per maand berekenen

        $aantalkinderen = 0;
        $toeslag = 0;
        foreach ($this->getKinderen() as $kind) {
            $leeftijd = $kind->getLeeftijd($jaar, $maand);
            if ($leeftijd < 18) {
                $aantalkinderen += 1;
                if ($leeftijd >= 16) {
                    $toeslag += $kgb[2015]['VH16Plus'];
                } elseif ($leeftijd >= 12) {
                    $toeslag += $kgb[2015]['VH12Plus'];
                }
            }
        }
        $toeslag += $kgb[$jaar][min(3, $aantalkinderen)]; // standaard toeslag
        $toeslag += max(0, $aantalkinderen - 3) * $kgb[$jaar]['extrakind']; // meer dan 3 kinderen
        $toeslag += sizeof($this->getBelastingplichtigen()) < 2 ? $kgb[$jaar]['VHgeenTP'] : 0; // geen partner
        $toeslag -= min($toeslag, $kgb[$jaar]['Tslg'] / 100 * max(0, ($this->getVerzamelinkomen() - $kgb[2015]['Drempel']))); // Afbouw

        return $toeslag / 12;

        $aantalkinderen = sizeof($this->getKinderen());
        $kindgebondenbudget = $kgb[$jaar][min(3, $aantalkinderen)]; // standaard toeslag
        $kindgebondenbudget += max(0, $aantalkinderen - 3) * $kgb[$jaar]['extrakind']; // meer dan 3 kinderen
        $kindgebondenbudget += sizeof($this->getBelastingplichtigen()) < 2 ? $kgb[$jaar]['VHgeenTP'] : 0; // geen partner
        $kindgebondenbudget -= min($kindgebondenbudget, $kgb[$jaar]['Tslg'] / 100 * max(0, ($this->getVerzamelinkomen() - $kgb[2015]['Drempel']))); // Afbouw
        return $kindgebondenbudget;
    }

    public function getKindgebondenbudget($jaar = 2015) {
        $kindgebondenbudget = 0;
        foreach (range(1, 12) as $mnd) {
            $kindgebondenbudget += $this->getKindgebondenbudgetmaand($jaar, $mnd);
        }
        return $kindgebondenbudget;
    }

    public function hasKind12() {
        foreach ($this->getKinderen() as $kind) {
            if ($kind->getLeeftijd(2015, 1) < 12)
                return true;
        }
        return false;
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
     * Add belastingplichtigen
     *
     * @param \BelastingBundle\Entity\Belastingplichtige $belastingplichtigen
     *
     * @return Huishouden
     */
    public function addBelastingplichtigen(\BelastingBundle\Entity\Belastingplichtige $belastingplichtigen) {
        $this->belastingplichtigen[] = $belastingplichtigen;

        return $this;
    }

    /**
     * Remove belastingplichtigen
     *
     * @param \BelastingBundle\Entity\Belastingplichtige $belastingplichtigen
     */
    public function removeBelastingplichtigen(\BelastingBundle\Entity\Belastingplichtige $belastingplichtigen) {
        $this->belastingplichtigen->removeElement($belastingplichtigen);
    }

    /**
     * Get belastingplichtigen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBelastingplichtigen() {
        return $this->belastingplichtigen;
    }

    /**
     * Add kinderen
     *
     * @param \BelastingBundle\Entity\Kind $kinderen
     *
     * @return Huishouden
     */
    public function addKinderen(\BelastingBundle\Entity\Kind $kinderen) {
        $this->kinderen[] = $kinderen;

        return $this;
    }

    /**
     * Remove kinderen
     *
     * @param \BelastingBundle\Entity\Kind $kinderen
     */
    public function removeKinderen(\BelastingBundle\Entity\Kind $kinderen) {
        $this->kinderen->removeElement($kinderen);
    }

    /**
     * Get kinderen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKinderen() {
        return $this->kinderen;
    }

    /**
     * Add woningen
     *
     * @param \BelastingBundle\Entity\Woning $woningen
     *
     * @return Huishouden
     */
    public function addWoningen(\BelastingBundle\Entity\Woning $woningen) {
        $this->woningen[] = $woningen;

        return $this;
    }

    /**
     * Remove woningen
     *
     * @param \BelastingBundle\Entity\Woning $woningen
     */
    public function removeWoningen(\BelastingBundle\Entity\Woning $woningen) {
        $this->woningen->removeElement($woningen);
    }

    /**
     * Get woningen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWoningen() {
        return $this->woningen;
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Huishouden
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

}
