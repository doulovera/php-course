<?php

function clear () {
  if (PHP_OS === 'WINNT') {
    system('cls');
  } else {
    system('clear');
  }
}

$word_list = ["piloto", "curso", "comentario", "pizza", "plataforma"];

define("MAX_ATTEMPTS", 6);

echo "🌈 Welcome to the game!\n\n";

// Initialize game
$random_position = rand(0, count($word_list) - 1);

$choosen_word = $word_list[$random_position];
$choosen_word = strtolower($choosen_word);

$word_length = strlen($choosen_word);

$discovered_letters = str_pad("", $word_length, "_");

$attempts = 0;

do {
  echo "The word has $word_length letters\n\n";
  echo "👉 " . $discovered_letters . "\n\n";

  $player_letter = readline("Type a letter: ");
  $player_letter = strtolower($player_letter);

  // Check letter
  if (str_contains($choosen_word, $player_letter)) {

    $offset = 0;

    while (($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false) {

      $discovered_letters[$letter_position] = $player_letter;

      $offset = $letter_position + 1;  

    }

  } else {
    clear();
    $attempts++;

    echo "🚫 Letter not found \n🅰You have " . (MAX_ATTEMPTS - $attempts) . " attempts left\n\n";

    sleep(2);
  }

  clear();
} while ($attempts < MAX_ATTEMPTS && $discovered_letters !== $choosen_word);

clear();
if ($attempts < MAX_ATTEMPTS) {
  echo "🎉 You won! The word was: $choosen_word\n";
} else {
  echo "😭 You lost! The word was: $choosen_word\n";
}

echo "\n";
