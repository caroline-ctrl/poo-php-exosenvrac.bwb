<?php

class Archetype
{
    private $nom;

    /************************/
    /*********GETTER********/
    /***********************/

    /**
     * return $nom
     * type: string
     */
    public function getNom()
    {
        return $this->nom;
    }



    /********************************/
    /***************SETTER***********/
    /*******************************/

    /**
     * set value $nom
     * type: string
     */
    public function setNom(int $nom)
    {
        $this->nom = $nom;
    }
}



    /**
     * set value $race
     * type: string
     */
    public function setRace(string $race)
    {
        $this->race = $race;
    }

    /**
     * set value $archetype
     * type: string
     */
    public function setArchetype(string $archetype)
    {
        $this->archetype = $archetype;
    }





        /**
     * return $race
     * type: string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * return $archetype
     * type: string
     */
    public function getArchetype()
    {
        return $this->archetype;
    }


    $this->setRace($race);
    $this->setArchetype($archetype);
    private $race;
    private $archetype;
    