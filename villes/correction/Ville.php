<?php
/**
 * Created by PhpStorm.
 * User: beb
 * Date: 17/10/2019
 * Time: 11:21
 */

class Ville
{
    private $nom;
    private $departement;
    private $latitude;
    private $longitude;
    private $population;
    private $densite;

    /**
     * Ville constructor.
     * @param $nom
     * @param $departement
     * @param $latitude
     * @param $longitude
     * @param $population
     * @param $densite
     */
    public function __construct($nom, $departement, $latitude, $longitude, $population, $densite)
    {
        $this->nom = $nom;
        $this->departement = $departement;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->population = $population;
        $this->densite = $densite;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @return mixed
     */
    public function getDensite()
    {
        return $this->densite;
    }

}