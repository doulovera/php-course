<?php

// $number = 10;
// $number = $number + pi();

// var_dump($number);

/** ---------- CASTING ---------- 
 * Es la forma de convertir un tipo de dato a otro.
 * 
 * $variable = (tipoDeDato) $variable;
 * 
*/

$number = "5";
var_dump($number); // string(1) "5"

$number = (int) $number;
var_dump($number); // int(5)

echo "\n------------------------\n\n";

$days = 6.52;
var_dump($days); // float(6.52)

$days = (int) $days;
var_dump($days); // int(6)

echo "\n------------------------\n\n";

$my_bool = 0;
var_dump($my_bool); // int(0)

$my_bool = (bool) $my_bool;
var_dump($my_bool); // bool(false)


echo "\n";