<?php

// This creates a copy of the variable value to be used inside the function
function doubleValue(int $number): int {
    $number *= 2;
    return $number;
}

// This refers to the original variable value to be used inside the function (any changes to the value will happen to the original variable as well)
function doubleValueRef(int &$number): int {
    $number *= 2;
    return $number;
}


$original = 5;
doubleValue($original);
var_dump($original);

doubleValueRef($original);
var_dump($original);