<?php

echo "Welcome to PHP\n"; // Echo statement (print)

$name = "Alice"; // Variable declaration
echo "Hello, " . $name . "!\n"; // String concatenation (use .)

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;
echo "Total pizza slices: " . $totalSlices . "\n";

$isHungry = false; // Boolean variable
echo "Hungry?";
echo $isHungry ? "Yes" : "No" ; // ? if block : else block
echo "\n"; 