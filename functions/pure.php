<?php

// Pure function - doesn't affect the global variables (outside it's function)
function add(int $a, int $b): int {
    return $a + $b;
}

var_dump(add(1, 3), add(1, 3));

$total = 0;

// Non-pure function
function addToTotal($value) {
    global $total;
    $total += $value;
    return $total;
}

var_dump(addToTotal(3), addToTotal(3));