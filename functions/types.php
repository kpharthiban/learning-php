<?php
declare(strict_types= 1); // for added security (the argument passed should be same as the required data type)

// PHP 5 - types
// PHP 7 - strict types
function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5,3);