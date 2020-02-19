<?php

class Personnage
{
    private $force;
    private $agilite;
    private $endurance;
    private $race;
    private $archetype;
    private $mana;
    private $vie;
    private $armure;
    private $arme;


    
    /************************/
    /*********GETTER********/
    /***********************/

    /**
     * return $force
     * type: integer
     */
    public function getForce(){
        return $this->force;
    }

        /**
     * return $agilite
     * type: integer
     */
    public function getAgilite(){
        return $this->agilite;
    }

        /**
     * return $endurance
     * type: integer
     */
    public function getEndurance(){
        return $this->endurance;
    }

            /**
     * return $race
     * type: string
     */
    public function getRace(){
        return $this->race;
    }

        /**
     * return $archetype
     * type: string
     */
    public function getArchetype(){
        return $this->archetype;
    }

        /**
     * return $mana
     * type: integer
     */
    public function getMana(){
        return $this->mana;
    }

        /**
     * return $vie
     * type: integer
     */
    public function getVie(){
        return $this->vie;
    }

        /**
     * return $armure
     * type: integer
     */
    public function getArmure(){
        return $this->armure;
    }

        /**
     * return $arme
     * type: integer
     */
    public function getarme(){
        return $this->arme;
    }



/********************************/
/***************SETTER***********/
/*******************************/

    /**
     * set value $force
     * type: integer
     */
    public function setForce($force){
        $this->force = $force;
    }

        /**
     * set value $force
     * type: integer
     */
    public function setAgilite($agilite){
        $this->agilite = $agilite;
    }

        /**
     * set value $force
     * type: integer
     */
    public function setEndurance($endurance){
        $this->endurance = $endurance;
    }

        /**
     * set value $race
     * type: string
     */
    public function setRace($race){
        $this->race = $race;
    }

        /**
     * set value $archetype
     * type: string
     */
    public function setArchetype($archetype){
        $this->archetype = $archetype;
    }

            /**
     * set value $mana
     * type: integer
     */
    public function setMana($mana){
        $this->mana = $mana;
    }

            /**
     * set value $vie
     * type: integer
     */
    public function setVie($vie){
        $this->vie = $vie;
    }

            /**
     * set value $armure
     * type: integer
     */
    public function setArmure($armure){
        $this->armure = $armure;
    }

            /**
     * set value $arme
     * type: integer
     */
    public function setArme($arme){
        $this->arme = $arme;
    }



}