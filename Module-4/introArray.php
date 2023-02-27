<?php
$students = array(
    "Azad",
    "Rakib",
    "Nirjhor"
);

// var_dump($students);
// echo count($students);

// for($i=0; $i<count($students); $i++){
//     echo $students[$i]. "\n";
// }

$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]. "\n";
}

echo PHP_EOL;


for($i=$n-1; $i>=0; $i--){
    echo $students[$i]. "\n";
}

