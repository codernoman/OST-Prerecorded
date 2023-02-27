<?php
$person = array(
    'fname'=>'Abdullah',
    'lname'=>'Al Noman',
    'age'=>'25'
);

print_r($person);

unset($person['lname']);
print_r($person);