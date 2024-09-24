<?php 
class Animal {
    public $nom;
    public $age;

    public function manger() {
        echo "Je mange.";
    }
}
$animalData = new Animal();


class Chat extends Animal {
    public function miauler() {
        echo "Miaou !";
    }
}
$chatData = new Chat();

echo $chatData->manger() . " La vie de mon Chat, et toujour";


?>