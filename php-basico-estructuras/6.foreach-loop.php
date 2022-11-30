<?php

$artists = array(
  "Motherflowers" => "Retrofuturismopsicotropical",
  "C. Tangana" => "El Madrileño",
  "Alizzz" => "Tiene que haber algo más",
);

/** --------- FOREACH --------- 
 * 
 * Para iterar arrays.
 * 
 * foreach ($array as $value)
 * foreach ($array as $key => $value)
 * 
 * 
 * Con "break" podemos salir del bucle (un poco como "return" en funciones)
 * 
 * Con "continue" podemos saltar a la siguiente iteración del bucle
*/

foreach ($artists as $artist => $album) {
  echo "👩‍🎤 $artist | 🎵 {$album}";
  echo "\n";
}


foreach ($artists as $artist => $album) {
  if ($artist == "C. Tangana") {
    echo "Encontramos al artista top #1 con su álbum $album";
    break;
  }

  echo "\n";
}

echo "\n";
