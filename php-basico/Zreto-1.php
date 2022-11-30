<?php

$seconds = readline("Ingresa el tiempo en segundos: ");

$hours = (int) ($seconds / 3600);
$seconds = (int) ($seconds % 3600);

$minutes = (int) ($seconds / 60);
$seconds = (int) ($seconds % 60);

echo "{$hours}h : {$minutes}m : {$seconds}s";

echo("\n");
