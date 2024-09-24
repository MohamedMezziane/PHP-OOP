<?php 

class Voiture {
    public $marque;
    public $modele;
    public $color;

    public function demarrer() {
        echo "La voiture démarre.";
    }
}

// Création d'un object Voiture
$maVoiture = new Voiture();

// Class Variables Data
$maVoiture -> marque = "Renault";
$maVoiture -> modele = "2024";
$maVoiture -> color = "Blue";

// $maVoiture -> demarrer();
// echo "\n";
// echo "I'm Searching for a " . $maVoiture->color . " " . $maVoiture->marque . " Car, And Was fabricated This Year in " . $maVoiture->modele;
// echo "\n";

$mycar = new Voiture();
$mycar -> marque = "Mercedes";
$mycar -> modele = "2019";
$mycar -> color = "Black";

echo $mycar->marque;
echo "\n";
echo $maVoiture->marque;

?>