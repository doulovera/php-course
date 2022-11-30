<?php

$escuela = array(
  array(
    "nombre" => "Alberta",
    "ocupacion" => "Profesora",
    "color" => "Rojo",
    "comidas" => array(
      "favoritas" => "Pasta",
      "no_favoritas" => "Sushi",
    ),
  ),
  array(
    "nombre" => "Willie",
    "ocupacion" => "Chef",
    "color" => "Verde",
    "comidas" => array(
      "favoritas" => "Lasagna",
      "no_favoritas" => "Empanadas",
    ),
  ),
  array(
    "nombre" => "César",
    "ocupacion" => "Comediante",
    "color" => "Azul",
    "comidas" => array(
      "favoritas" => "Arepa",
      "no_favoritas" => "Pescado",
    ),
  ),
);

$willie = $escuela[1];
echo "🍕La comida favorita de Willie es: " . $willie["comidas"]["favoritas"] . " 🌈y su color favorito es: " . $willie["color"];


echo "\n";
