<?php
class Human{ //class
    public $name; //property
    function sayName(){
        echo "Salam";
    }

    function getName(){

    }
}

$h1 = new Human(); //object
$h1 -> name = "Abdullah Al Noman"; //Set
$h1 -> sayName(); 
echo PHP_EOL;
echo $h1->name; //Get