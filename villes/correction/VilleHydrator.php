<?php
/**
 * Created by PhpStorm.
 * User: beb
 * Date: 17/10/2019
 * Time: 12:17
 */

class VilleHydrator
{
    private $villeArray;

    /**
     * VilleHydrator constructor.
     * @param $villeArray
     */
    public function __construct($villeArray)
    {
        $this->villeArray = $villeArray;
    }

    public function hydrate()
    {
        foreach ($this->villeArray as $result) {
            extract($result);
            $villeObj = new Ville($ville, $departement, $latitude, $longitude, $population, $densite);
            $resultObj[] = $villeObj;
        }
        return $resultObj;
    }
}