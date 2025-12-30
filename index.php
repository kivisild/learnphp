<?php

$bool = true && false;
$bool = true || false;
$num = 15;
if ($num > 10){
    var_dump('Suurem');
}
var_dump($bool);

$array = [1,2,3];

foreach($array as $key=>$value){
    var_dump($key, $value);
}

foreach($array as $value){
    var_dump($value);
}


$a = 1;
$b = &$a;
$b = 2;

foreach($array as $value){
    $value *= 2;
}

// Pointeriga saab muuta
foreach($array as &$value){
    $value *= 2;
}
var_dump($array);