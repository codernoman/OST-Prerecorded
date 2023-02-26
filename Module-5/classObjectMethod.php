<?php
class Human{ //class
    public $name; //property
    function sayName(){
        echo "Salam";
    }

    function getName(){
        echo "My name is {$this->name}";
    }
}

$h1 = new Human(); //object
$h2 = new Human();

$h1 -> name = "Abdullah Al Noman \n"; //Set
$h2->name= "Mohsin Habib";

$h1 -> sayName(); 
$h2 -> sayName(); 

echo PHP_EOL;
// echo $h1->name; //Get
echo $h1->getName();
echo $h2->getName();