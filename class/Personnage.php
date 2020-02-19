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
    /*********CONSTRUCT********/
    /***********************/
    public function __construct($force, $agilite, $endurance, $race, $archetype, $mana, $vie, $arme, $armure)
    {
        $this->setForce($force);
        $this->setAgilite($agilite);
        $this->setEndurance($endurance);
        $this->setRace($race);
        $this->setArchetype($archetype);
        $this->setMana($mana);
        $this->setVie($vie);
        $this->setArmure($armure);
        $this->setArme($arme);
    }


    /************************/
    /*********GETTER********/
    /***********************/

    /**
     * return $force
     * type: integer
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * return $agilite
     * type: integer
     */
    public function getAgilite()
    {
        return $this->agilite;
    }

    /**
     * return $endurance
     * type: integer
     */
    public function getEndurance()
    {
        return $this->endurance;
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

    /**
     * return $mana
     * type: integer
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * return $vie
     * type: integer
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * return $armure
     * type: integer
     */
    public function getArmure()
    {
        return $this->armure;
    }

    /**
     * return $arme
     * type: integer
     */
    public function getarme()
    {
        return $this->arme;
    }



    /********************************/
    /***************SETTER***********/
    /*******************************/

    /**
     * set value $force
     * type: integer
     */
    public function setForce(int $force)
    {
        $this->force = $force;
    }

    /**
     * set value $agilite
     * type: integer
     */
    public function setAgilite(int $agilite)
    {
        $this->agilite = $agilite;
    }

    /**
     * set value $endurance
     * type: integer
     */
    public function setEndurance(int $endurance)
    {
        $this->endurance = $endurance;
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
     * set value $mana
     * type: integer
     */
    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }

    /**
     * set value $vie
     * type: integer
     */
    public function setVie(int $vie)
    {
        $this->vie = $vie;
    }

    /**
     * set value $armure
     * type: integer
     */
    public function setArmure(int $armure)
    {
        $this->armure = $armure;
    }

    /**
     * set value $arme
     * type: integer
     */
    public function setArme(int $arme)
    {
        $this->arme = $arme;
    }


    /****************************/
    /******SPECIFIC MEHTODS******/
    /***************************/

    public function attaquer($vie, $mana){
        $this->setVie($vie + 10);
        $this->setMana($mana +10);
        // $mana = $this->getMana() + 10;
        // echo 'Vous venez d\'attaquer l\'adversaire, votre barre de vie est maintenant a ' . $this->getVie() . ' points et votre mana est a ' . $mana . ' points.<br/>';

    }

    public function degat($degat){
        $this->setVie($degat - 50);
    }

    public function soigner($soins){
        $this->setVie($soins + 100);
    }

    public function boire($boire){
        $this->setMana($boire + 20);

    }

    public function manger($manger){
        $this->setVie($manger + 30);

    }

    // // public function interagir(){

    // // }

    // public function seDeplacer($x, $y){

    // }
}

