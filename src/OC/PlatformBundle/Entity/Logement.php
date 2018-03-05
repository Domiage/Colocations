<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logement
 *
 * @ORM\Table(name="logement")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\LogementRepository")
 */
class Logement
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
     * @ORM\Column(name="typeLogement", type="string", length=25)
     */
    private $typeLogement;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreChambresTotales", type="integer")
     */
    private $nbreChambresTotales;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreChambresALouer", type="integer")
     */
    private $nbreChambresALouer;

    /**
     * @var int
     *
     * @ORM\Column(name="NbreSallesDeBain", type="integer")
     */
    private $nbreSallesDeBain;

    /**
     * @var bool
     *
     * @ORM\Column(name="TV", type="boolean")
     */
    private $tV;

    /**
     * @var bool
     *
     * @ORM\Column(name="parking", type="boolean")
     */
    private $parking;

    /**
     * @var bool
     *
     * @ORM\Column(name="jardin", type="boolean")
     */
    private $jardin;

    /**
     * @var bool
     *
     * @ORM\Column(name="terrasseBalcon", type="boolean")
     */
    private $terrasseBalcon;

    /**
     * @var bool
     *
     * @ORM\Column(name="concierge", type="boolean")
     */
    private $concierge;

    /**
     * @var bool
     *
     * @ORM\Column(name="salleDeSport", type="boolean")
     */
    private $salleDeSport;

    /**
     * @var bool
     *
     * @ORM\Column(name="ascenceur", type="boolean")
     */
    private $ascenceur;

    /**
     * @var bool
     *
     * @ORM\Column(name="wifi", type="boolean")
     */
    private $wifi;


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
     * Set typeLogement
     *
     * @param string $typeLogement
     *
     * @return Logement
     */
    public function setTypeLogement($typeLogement)
    {
        $this->typeLogement = $typeLogement;

        return $this;
    }

    /**
     * Get typeLogement
     *
     * @return string
     */
    public function getTypeLogement()
    {
        return $this->typeLogement;
    }

    /**
     * Set nbreChambresTotales
     *
     * @param integer $nbreChambresTotales
     *
     * @return Logement
     */
    public function setNbreChambresTotales($nbreChambresTotales)
    {
        $this->nbreChambresTotales = $nbreChambresTotales;

        return $this;
    }

    /**
     * Get nbreChambresTotales
     *
     * @return int
     */
    public function getNbreChambresTotales()
    {
        return $this->nbreChambresTotales;
    }

    /**
     * Set nbreChambresALouer
     *
     * @param integer $nbreChambresALouer
     *
     * @return Logement
     */
    public function setNbreChambresALouer($nbreChambresALouer)
    {
        $this->nbreChambresALouer = $nbreChambresALouer;

        return $this;
    }

    /**
     * Get nbreChambresALouer
     *
     * @return int
     */
    public function getNbreChambresALouer()
    {
        return $this->nbreChambresALouer;
    }

    /**
     * Set nbreSallesDeBain
     *
     * @param integer $nbreSallesDeBain
     *
     * @return Logement
     */
    public function setNbreSallesDeBain($nbreSallesDeBain)
    {
        $this->nbreSallesDeBain = $nbreSallesDeBain;

        return $this;
    }

    /**
     * Get nbreSallesDeBain
     *
     * @return int
     */
    public function getNbreSallesDeBain()
    {
        return $this->nbreSallesDeBain;
    }

    /**
     * Set tV
     *
     * @param boolean $tV
     *
     * @return Logement
     */
    public function setTV($tV)
    {
        $this->tV = $tV;

        return $this;
    }

    /**
     * Get tV
     *
     * @return bool
     */
    public function getTV()
    {
        return $this->tV;
    }

    /**
     * Set parking
     *
     * @param boolean $parking
     *
     * @return Logement
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return bool
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set jardin
     *
     * @param boolean $jardin
     *
     * @return Logement
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;

        return $this;
    }

    /**
     * Get jardin
     *
     * @return bool
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set terrasseBalcon
     *
     * @param boolean $terrasseBalcon
     *
     * @return Logement
     */
    public function setTerrasseBalcon($terrasseBalcon)
    {
        $this->terrasseBalcon = $terrasseBalcon;

        return $this;
    }

    /**
     * Get terrasseBalcon
     *
     * @return bool
     */
    public function getTerrasseBalcon()
    {
        return $this->terrasseBalcon;
    }

    /**
     * Set concierge
     *
     * @param boolean $concierge
     *
     * @return Logement
     */
    public function setConcierge($concierge)
    {
        $this->concierge = $concierge;

        return $this;
    }

    /**
     * Get concierge
     *
     * @return bool
     */
    public function getConcierge()
    {
        return $this->concierge;
    }

    /**
     * Set salleDeSport
     *
     * @param boolean $salleDeSport
     *
     * @return Logement
     */
    public function setSalleDeSport($salleDeSport)
    {
        $this->salleDeSport = $salleDeSport;

        return $this;
    }

    /**
     * Get salleDeSport
     *
     * @return bool
     */
    public function getSalleDeSport()
    {
        return $this->salleDeSport;
    }

    /**
     * Set ascenceur
     *
     * @param boolean $ascenceur
     *
     * @return Logement
     */
    public function setAscenceur($ascenceur)
    {
        $this->ascenceur = $ascenceur;

        return $this;
    }

    /**
     * Get ascenceur
     *
     * @return bool
     */
    public function getAscenceur()
    {
        return $this->ascenceur;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     *
     * @return Logement
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get wifi
     *
     * @return bool
     */
    public function getWifi()
    {
        return $this->wifi;
    }
}

