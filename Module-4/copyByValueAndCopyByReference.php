<?php
$person = array('fname'=> 'Hello', 'lname' => 'World');

//copy by value
$newPerson = $person;
$newPerson['lname'] = 'Noman';

print_r($person);
print_r($newPerson);
// //copy by reference
// $newPerson = &$person;
// $newPerson['lname'] = 'Noman';

function printData($person){
    $person['fname'] .= "Changed";
    print_r($person);
}

printData($person);
print_r($person);