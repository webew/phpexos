<?php
/**
 * Created by PhpStorm.
 * User: beb
 * Date: 17/10/2019
 * Time: 12:11
 */

class VilleHandler
{
    private $tabVilles;

    /**
     * HandleVille constructor.
     * @param $tabVilles
     */
    public function __construct($tabVilles)
    {
        $this->tabVilles = $tabVilles;
    }

    public function toObjectsArray()
    {
        $resultObj = [];
        foreach ($this->tabVilles as $result) {
            extract($result);
            $villeObj = new Ville($ville, $departement, $latitude, $longitude, $population, $densite);
            $resultObj[] = $villeObj;
        }
        return $resultObj;
    }

    public function sort()
    {
        usort($this->tabVilles, function($a,$b){
            return $a["ville"] <=> $b["ville"];
        });
    }
}