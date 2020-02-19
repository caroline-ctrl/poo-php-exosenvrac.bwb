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


    /*********GETTER********/

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





}