<?php

/** ---------- MANIPULANDO ARRAYS ----------
 * 
 * PHP tiene muchas formas de manipular arrays. Acá algunas:
 * 
 */

$edades = [18, 22, 35, 53];

/* count -> contar la cantidad de elementos */
// echo count($edades); // 4

/* array_push -> agregar un elemento al final del array */
// array_push($edades, 46);
// var_dump($edades);

/* is_array -> saber si una variable es un array */
// var_dump( is_array($edades) ); // true

// $esto_no_es_un_arreglo = " No soy";
// var_dump( is_array($esto_no_es_un_arreglo) ); // false

/* explode -> convertir un string en un array (.split en JS) */
// $lista_de_frutas = "fresa, manzana, pera, uva";
// $lista_de_frutas_array = explode(", ", $lista_de_frutas);

// var_dump($lista_de_frutas_array);

/* implode -> convertir un array en un string (.join en JS) */
$lista_de_frutas_array = ["naranja", "limón", "mandarina"];
$lista_de_frutas_string = implode(" - ", $lista_de_frutas_array);

var_dump($lista_de_frutas_string);


echo "\n";
