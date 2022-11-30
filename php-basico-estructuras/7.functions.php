<?php

function get_song(int $number = 0) {

  if (!$number) {
    echo "No number\n";
    $number = rand(1, 5);
  }
  
  echo "($number) ";

  switch ($number) {
    case 1:
      echo "La Sala";
      break;
    
    case 2:
      echo "Macundales";
      break;

    case 3:
      echo "Flixi Flaxi";
      break;

    default:
      echo "Sorry, no song listed";
      break;
  }

}

$numberSelected = (int) readline("Select a number or leave it blank: ");
get_song($numberSelected);

echo "\n";
