<?php

$hours = readline("Please enter the Hours (h):");
$minutes = readline("Please, enter the Minutes (m): ");
$seconds = readline("Please, enter the Seconds (s): ");

$hours = ($hours * 3600);
$minutes = ($minutes * 60);

$total_seconds = $hours + $minutes + $seconds;

echo "$total_seconds seconds";

echo "\n";
