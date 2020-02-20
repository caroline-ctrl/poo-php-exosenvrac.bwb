<?php

class Personnage
{
    private $nom;
    private $force;
    // private $agilite;
    // private $endurance;
    private $mana;
    private $vie;
    private $armure;
    private $arme;


    /************************/
    /*********CONSTRUCT********/
    /***********************/
    public function __construct($nom, $force, $mana, $vie, $arme, $armure)
    {
        $this->setNom($nom);
        $this->setForce($force);
        // $this->setAgilite($agilite);
        // $this->setEndurance($endurance);
        $this->setMana($mana);
        $this->setVie($vie);
        $this->setArmure($armure);
        $this->setArme($arme);
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


    /**
     * return $force
     * type: integer
     */
    public function getForce()
    {
        return $this->force;
    }

    // /**
    //  * return $agilite
    //  * type: integer
    //  */
    // public function getAgilite()
    // {
    //     return $this->agilite;
    // }

    // /**
    //  * return $endurance
    //  * type: integer
    //  */
    // public function getEndurance()
    // {
    //     return $this->endurance;
    // }


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
     * set value $nom
     * type: string
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }


    /**
     * set value $force
     * type: integer
     */
    public function setForce(int $force)
    {
        $this->force = $force;
    }

    // /**
    //  * set value $agilite
    //  * type: integer
    //  */
    // public function setAgilite(int $agilite)
    // {
    //     $this->agilite = $agilite;
    // }

    // /**
    //  * set value $endurance
    //  * type: integer
    //  */
    // public function setEndurance(int $endurance)
    // {
    //     $this->endurance = $endurance;
    // }


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
        // if ($this->armure === 0){
        //     echo 'Vous n\'avez plus d\'armure';
        // }
        $this->armure = $armure;
    }

    /**
     * set value $arme
     * type: integer
     */
    public function setArme(int $arme)
    {
        // if ($this->arme <= 0){
        //     echo 'Vous n\'avez plus d\'arme<br>';
        // }

        $this->arme = $arme;
    }




    /****************************/
    /******SPECIFIC MEHTODS******/
    /***************************/

    public function attaquer(Personnage $personneQuiAttaque){
        // $this->mana += 10;
        // $this->vie += 10;
        $personneQuiAttaque->vie += $this->force;
    }

    public function degat(Personnage $degatRecu){
        // $this->vie -= 50;
        $degatRecu->vie -= $this->force;
        $degatRecu->armure -= 5;
        $degatRecu->arme -=2;

    }

    public function soigner(){
        $this->vie += 100;
    }

    public function boire(){
        $this->mana += 20;

    }

    public function manger(){
        $this->vie += 30;

    }

    public function interagir(Personnage $perso1, Personnage $perso2){
        echo 'Je parle avec mon ami et allié';
    }

    public function magie(Personnage $persoAAttaquer){
        // $this->mana += 
    }

    // public function seDeplacer($x, $y){
    //     public $avancer;
    //     $droite;
    //     $gauche;
    // }
}




$oxie = new Personnage('Oxie', 200, 100, 300, 50, 80);
$canaille =new Personnage('Canaille', 150, 100, 200, 50, 80);


echo $oxie->getNom() . ':<br>- force : ' . $oxie->getForce() . ' points<br>- mana : ' . $oxie->getMana() . ' points<br>- vie : ' . $oxie->getVie() .
 ' points<br>- arme : ' . $oxie->getArme() . ' points<br>- armure : ' . $oxie->getArmure() . ' points<br>';

echo '<br>' . $canaille->getNom() . ':<br>- force : ' . $canaille->getForce() . ' points<br>- mana : ' . $canaille->getMana() . ' points<br>- vie : ' . $canaille->getVie() . ' points<br>- arme : ' . $canaille->getArme() . ' points<br>- armure : ' . $canaille->getArmure() . ' points<br><br>';



$canaille->degat($oxie);
echo $oxie->getNom() . ' se fait attaquer par ' . $canaille->getNom() . ', les dégats sont importants, son armure est touchée (' . $oxie->getArmure() . ') ainsi que son arme (' . $oxie->getArme() . ') 
. Sa vie baisse et se retrouve a ' . $oxie->getVie() . ' points.<br><br>';

$canaille->attaquer($oxie);
echo 'Mais ' . $oxie->getNom() . ' n\'a pas dit son dernier mot, elle contre attaque et blaisse sérieusement ' . $canaille->getNom() . ', sa vie baisse également : ' . $canaille->getVie() . '<br><br>';

$canaille->manger();
$canaille->boire();
$oxie->manger();
$oxie->boire();
echo 'Une fois les deux rivales a terre, la fée magique leur fait parvenir du chocolat magique pour les réconsilier. Une fois mangé et bu, leur santé s\'ameliore.
 Vie de ' . $oxie->getNom() . ' : ' . $oxie->getVie() . ' et vie de ' . $canaille->getNom() . ' : ' . $canaille->getVie() . '.<br><br>';

 echo $oxie->getNom() . ':<br>- force : ' . $oxie->getForce() . ' points<br>- mana : ' . $oxie->getMana() . ' points<br>- vie : ' . $oxie->getVie() .
 ' points<br>- arme : ' . $oxie->getArme() . ' points<br>- armure : ' . $oxie->getArmure() . ' points<br>';

echo '<br>' . $canaille->getNom() . ':<br>- force : ' . $canaille->getForce() . ' points<br>- mana : ' . $canaille->getMana() . ' points<br>- vie : ' . $canaille->getVie() . ' points<br>- arme : ' . $canaille->getArme() . ' points<br>- armure : ' . $canaille->getArmure() . ' points<br><br>';



// echo 'Oxie à ' . $oxie->getVie() . ' points de vie, ' . $oxie->getMana() . ' points de mana. Elle fait partie de la race des ' . $oxie->getRace()
// . ' et c\'est un ' . $oxie->getArchetype() . '. Elle a également une armure puissante : '. $oxie->getArmure() . ' points.<br>';

// $oxie->degat();
// echo 'Oxie vient de se faire attaquer par un adversaire. Elle perd donc des points de vie. Il lui reste que ' . $oxie->getVie() . ' points.<br>';

// $oxie->manger();
// $oxie->boire();
// echo 'Oxie a trouvé une pomme et une potion magique qui lui permet de retrouver un peu de vie et de magie. Vie : ' . $oxie->getVie() . ' points et mana : '
// . $oxie->getMana() . ' points<br>';

// $oxie->attaquer();
// echo 'Au cours de son periple, Oxie combat un gobelin. Grace à son armure puissante, elle a vaincu l\'adversaire. Grace a cette baitaille
// elle gagne 10 points de vie et 10 de mana. Vie : ' . $oxie->getVie() . ' points et mana : '
// . $oxie->getMana() . ' points.<br>';

// $oxie->soigner();
// echo 'Le gobelin possedait des pansements magics. Oxie en a pliqué un sur l\'une de ses plaie. Sa vie a bien augmenté. Vie : ' . $oxie->getVie() . ' points<br>';