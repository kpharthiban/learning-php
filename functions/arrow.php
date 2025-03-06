<?php

$numbers = [1, 2, 3, 4, 5];
$multiplier = 3;

$squared = array_map(function ($n) use($multiplier) { // need to use use() to use global variable
    return $n * $multiplier;
}, $numbers);

$squared2 = array_map(
    fn ($n) => $n * $multiplier, // can access global variable 
    $numbers
);

var_dump($numbers, $squared, $squared2);