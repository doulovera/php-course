<?php

/** ---------- ARRAYS ----------
 * 
 * Hay dos formas de declarar un arreglo:
 * 
 * 1. Declaración de arreglo simple
 * 2. Declaración de arreglo asociativo
 *
 */

// 1. Declaración de arreglo simple
$edades = [
  20, 18, 40,
];

// echo $edades[0]; // 20

$edades_2 = array(
  20, 18, 40,
);

// echo $edades_2[1]; // 18

// 2. Declaración de arreglo asociativo
$cafes = [
  "Capuccino" => 25,
  "Latte" => 18,
  "Oscuro" => 40,
];

// echo "El precio del Latte es: {$cafes['Latte']}"; // 18

$personas = array(
  "Antonio" => array(
    "edad" => 20,
    "altura" => 1.80,
  ),
  "Diana" => array(
    "edad" => 18,
    "altura" => 1.60,
  ),
  "Miriam" => array(
    "edad" => 40,
    "altura" => 1.70,
  ),
);

echo "Los datos de Miriam son: {$personas['Miriam']['edad']} años y {$personas['Miriam']['altura']} metros"; // 40 y 1.70

echo "\n";
