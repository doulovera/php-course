<?php

$saved_money = readline("How much money do you have?");

if ($saved_money < 100) {
  echo "🚫 Sorry, you cannot withdraw this money. You need at least 100";
} else {
  echo "✅ You can withdraw all the money saved!";
}

echo "\n";
