<?php

/**
 * ----------- VARIABLES ----------- 
 * El signo de dólar indica que es una variable, mientras que
 * la palabra "const" indica que es una constante.
 * 
 * $nombre = "valor $otraVariable"; 
 * 
 * Las constantes no se pueden poner de esa misma forma en un string,
 * sino que hay que concatenarlo con el punto.
 */

$nombre = "Douglas";
$apellido = "Lovera";

define("NUMERO_PI", 3.1416);

echo "Soy $nombre $apellido y el número PI es " . NUMERO_PI;

// echo "Mi nombre es " . $nombre . " " . $apellido . "🦄";
// echo "Mi nombre es $nombre $apellido 🦌";
// echo "(13 x 11) + 2 = " . ((13 * 11) + 2);

// $personas = [
//   "Luis" => 22,
//   "Maria" => 24,
//   "Alberta" => 18
// ];

/**
 * ----------- DEBUGGING ----------- 
 * 
 * Para obtener información de una variable:
 * 
 * var_dump($personas);
 *  
 * print_r($personas);
 * 
 */

// var_dump($personas);
// print_r($personas);

/**
 * ----------- DEBUGGING ----------- 
 * 
 * 
 */

echo "\n";
