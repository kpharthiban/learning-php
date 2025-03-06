<?php

$message = "Bye";
// passing by reference -> using &$message will refer to the original variable and will change its value
$greet = function ($name) use (&$message) {
    $message = $message . "!";
    return "$message, $name\n";
};

echo $greet("David");
echo $message . "\n";

$numbers = [1, 2, 3];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);