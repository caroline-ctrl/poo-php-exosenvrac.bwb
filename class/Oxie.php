<?php

include('Personnage.php');

class Oxie extends Personnage
{
    public function __construct($force, $agilite, $endurance, $race, $archetype, $mana, $vie, $arme, $armure)
    {
        parent::__construct($force, $agilite, $endurance, $race, $archetype, $mana, $vie, $arme, $armure);
    }
}

$oxie = new Oxie(200, 100, 100, 'elfe', 'magicien', 100, 100, 10, 80);


echo 'Oxie à ' . $oxie->getVie() . ' points de vie, ' . $oxie->getMana() . ' points de mana. Elle fait partie de la race des ' . $oxie->getRace()
. ' et c\'est un ' . $oxie->getArchetype() . '. Elle a également une armure puissante : '. $oxie->getArmure() . ' points.<br>';

$oxie->degat(100);
echo 'Oxie vient de se faire attaquer par un adversaire. Elle perd donc des points de vie. Il lui reste que ' . $oxie->getVie() . ' points.<br>';

$oxie->manger(50);
$oxie->boire(100);
echo 'Oxie a trouvé une pomme et une potion magique qui lui permet de retrouver un peu de vie et de magie. Vie : ' . $oxie->getVie() . ' points et mana : '
. $oxie->getMana() . ' points<br>';

$oxie->attaquer(80, 120);
echo 'Au cours de son periple, Oxie combat un gobelin. Grace à son armure puissante, elle a vaincu l\'adversaire. Grace a cette baitaille
elle gagne 10 points de vie et 10 de mana. Vie : ' . $oxie->getVie() . ' points et mana : '
. $oxie->getMana() . ' points.<br>';