<?php

$isStudent = 1;
// var_dump to see data type and value
// === to compare value together with data type
var_dump($isStudent, true, $isStudent === true);

// $scores = [85, "90", 95.5];
// var_dump($scores, $scores[0] + $scores[1] + $scores[2]); // type cohersion happens

$scores = [85, (int)"95.5"]; // type casting
$total = $scores[0] + $scores[1];
var_dump($scores, $total); // type cohersion happens

echo "Total score is: $total \n";