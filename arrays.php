<?php

$simpleArray = [1, 2, 3, 4, 5];
$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
];

// echo $simpleArray[0];
// echo $associativeArray["name"];

$simpleArray[] = 6;
$associativeArray["country"] = "USA";

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
];

// echo $matrix[1][1];

$fruits = ['apple', 'banana', 'orange'];
// var_dump(count($fruits));
sort($fruits); // ascending sort
// var_dump($fruits);
rsort($fruits); // descending sort
// var_dump($fruits);

// var_dump($associativeArray);
// asort($associativeArray); // sort the array by value
// var_dump($associativeArray);
// ksort($associativeArray); // sort the array by key
// var_dump($associativeArray);

$numbers = range(1, 5);
var_dump($numbers);

$squared = array_map(fn($n) => $n ** 2, $numbers);
var_dump($squared);

$evenNumbers = array_filter(
    $numbers,
    fn($n) => $n %2=== 0
);
var_dump($evenNumbers);

$sum = array_reduce(
    $numbers,
    fn($carry, $n) => $carry + $n,
    0
);
var_dump($sum);

$moreNumbers = [0, ...$numbers, 6]; // the 3 dot operator unpacks the array
var_dump($moreNumbers);

[$first, $second] = $fruits;
var_dump($first, $second);

$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

var_dump(
    array_intersect($set1, $set2), // position of var here doesn't matter
    array_diff($set1, $set2), // to see the items in set 1 but not in set 2
    array_diff($set2, $set1), // to see the items in set 2 but not in set 1
);

// $keys = array_keys($associativeArray); // get keys
$keys = array_map(
    fn($key) => ucfirst($key), array_keys($associativeArray)
);
$values = array_values($associativeArray); // get values
var_dump($keys, $values);

var_dump(
    array_key_exists('name', $associativeArray),
    in_array("John", $associativeArray)
);

$fruitString = implode(", ", $fruits); // join array vals as string
$backToArray = explode(", ", $fruitString); // separate string into arrays
var_dump($fruitString, $backToArray);

var_dump(
    array_unique(array_merge($set1, $set2)), // only gets the unique values - no duplication
    array_slice($set1, 1, 3), // get a part of the array
    array_merge($set1, $set2), // adds everything from both without noticing duplication
    array_merge($associativeArray, ["country" => "DE"]),
    $set1 + $set2, // union operator - only changes the value in the key that is not present (in this case, index will be the key)
    $associativeArray + ["country" => "DE"], // 
    [...$set1, ...$set2], // This will replace the value from second array and add if not exists
    [$associativeArray , ['country' => 'DE']]
);

var_dump(
    array_search('banana', $fruits) // search the index of the value
);