<?php

/** ---------- IF / ELSE ---------- */

// $available_sits = 4;

// $needed_sits = readline("How many sits do you need?");
// $is_actor = readline("Are you an actor? (y/n)");

// if ($available_sits > $needed_sits) {
//   echo "✅ There are $available_sits available sits";
// } else if ($is_actor === "y") {
//   echo "🎭 You are an actor, you can have a sit";
// } else {
//   echo "🚫 Sorry, there are no available sits";
// }


/** ---------- SWITCH ---------- */

$day = readline("In what month number are we?");

switch ($day) {
  case 1:
    echo "🌞 It's January";
    break;
  case 2:
    echo "🌞 It's February";
    break;
  case 3:
    echo "🌞 It's March";
    break;
  default:
    echo "💀 Month not supported";
}


echo "\n";
