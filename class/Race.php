<?php

class Race
{
    private $nom;


    /************************/
    /*********CONSTRUCT********/
    /***********************/
    public function __construct($nom)
    {
        $this->setNom($nom);
    }




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
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
}
