<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\AnnonceRepository")
 */
class Annonce
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
     * @ORM\Column(name="titreAnnonce", type="string", length=255)
     */
    private $titreAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionColocation", type="string", length=255)
     */
    private $descriptionColocation;

    /**
     * @var int
     *
     * @ORM\Column(name="loyerMensuel", type="integer")
     */
    private $loyerMensuel;

    /**
     * @var bool
     *
     * @ORM\Column(name="chargesIncluses", type="boolean")
     */
    private $chargesIncluses;

    /**
     * @var string
     *
     * @ORM\Column(name="typeChambre", type="string", length=20)
     */
    private $typeChambre;

    /**
     * @var int
     *
     * @ORM\Column(name="surfaceChambre", type="integer")
     */
    private $surfaceChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="amenagement", type="string", length=20)
     */
    private $amenagement;

    /**
     * @var bool
     *
     * @ORM\Column(name="salleDeBainPrivee", type="boolean")
     */
    private $salleDeBainPrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDisponibilite", type="datetimetz")
     */
    private $dateDisponibilite;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeMinimum", type="integer")
     */
    private $dureeMinimum;


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
     * Set titreAnnonce
     *
     * @param string $titreAnnonce
     *
     * @return Annonce
     */
    public function setTitreAnnonce($titreAnnonce)
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    /**
     * Get titreAnnonce
     *
     * @return string
     */
    public function getTitreAnnonce()
    {
        return $this->titreAnnonce;
    }

    /**
     * Set descriptionColocation
     *
     * @param string $descriptionColocation
     *
     * @return Annonce
     */
    public function setDescriptionColocation($descriptionColocation)
    {
        $this->descriptionColocation = $descriptionColocation;

        return $this;
    }

    /**
     * Get descriptionColocation
     *
     * @return string
     */
    public function getDescriptionColocation()
    {
        return $this->descriptionColocation;
    }

    /**
     * Set loyerMensuel
     *
     * @param integer $loyerMensuel
     *
     * @return Annonce
     */
    public function setLoyerMensuel($loyerMensuel)
    {
        $this->loyerMensuel = $loyerMensuel;

        return $this;
    }

    /**
     * Get loyerMensuel
     *
     * @return int
     */
    public function getLoyerMensuel()
    {
        return $this->loyerMensuel;
    }

    /**
     * Set chargesIncluses
     *
     * @param boolean $chargesIncluses
     *
     * @return Annonce
     */
    public function setChargesIncluses($chargesIncluses)
    {
        $this->chargesIncluses = $chargesIncluses;

        return $this;
    }

    /**
     * Get chargesIncluses
     *
     * @return bool
     */
    public function getChargesIncluses()
    {
        return $this->chargesIncluses;
    }

    /**
     * Set typeChambre
     *
     * @param string $typeChambre
     *
     * @return Annonce
     */
    public function setTypeChambre($typeChambre)
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    /**
     * Get typeChambre
     *
     * @return string
     */
    public function getTypeChambre()
    {
        return $this->typeChambre;
    }

    /**
     * Set surfaceChambre
     *
     * @param integer $surfaceChambre
     *
     * @return Annonce
     */
    public function setSurfaceChambre($surfaceChambre)
    {
        $this->surfaceChambre = $surfaceChambre;

        return $this;
    }

    /**
     * Get surfaceChambre
     *
     * @return int
     */
    public function getSurfaceChambre()
    {
        return $this->surfaceChambre;
    }

    /**
     * Set amenagement
     *
     * @param string $amenagement
     *
     * @return Annonce
     */
    public function setAmenagement($amenagement)
    {
        $this->amenagement = $amenagement;

        return $this;
    }

    /**
     * Get amenagement
     *
     * @return string
     */
    public function getAmenagement()
    {
        return $this->amenagement;
    }

    /**
     * Set salleDeBainPrivee
     *
     * @param boolean $salleDeBainPrivee
     *
     * @return Annonce
     */
    public function setSalleDeBainPrivee($salleDeBainPrivee)
    {
        $this->salleDeBainPrivee = $salleDeBainPrivee;

        return $this;
    }

    /**
     * Get salleDeBainPrivee
     *
     * @return bool
     */
    public function getSalleDeBainPrivee()
    {
        return $this->salleDeBainPrivee;
    }

    /**
     * Set dateDisponibilite
     *
     * @param \DateTime $dateDisponibilite
     *
     * @return Annonce
     */
    public function setDateDisponibilite($dateDisponibilite)
    {
        $this->dateDisponibilite = $dateDisponibilite;

        return $this;
    }

    /**
     * Get dateDisponibilite
     *
     * @return \DateTime
     */
    public function getDateDisponibilite()
    {
        return $this->dateDisponibilite;
    }

    /**
     * Set dureeMinimum
     *
     * @param integer $dureeMinimum
     *
     * @return Annonce
     */
    public function setDureeMinimum($dureeMinimum)
    {
        $this->dureeMinimum = $dureeMinimum;

        return $this;
    }

    /**
     * Get dureeMinimum
     *
     * @return int
     */
    public function getDureeMinimum()
    {
        return $this->dureeMinimum;
    }
}

