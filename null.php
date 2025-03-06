<?php
declare(strict_types= 1);

$abc = null;
$db = $abc ?? "default"; // assigns $abc if is not NULL, else "default" will be the value

var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == [],
    $abc,
    isset($dca), // checks if exist or not
    is_null($abc), // checks if NULL
    $db,
    empty([]) // checks if a array is empty
);

function greet(?string $name) { // adding ? accepts null value
    echo "Hello " . ($name ?? "stranger") . "!\n";
}

greet("Alice");
greet(null);

var_dump(
    array_filter([1, null, "", [], 3]) // will filter out null and empty stuffs
);