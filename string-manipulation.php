<?php

$str = "Hello, World!";
// echo $str[0];
// echo $str[-1];

echo substr($str, 0, 5);
echo "\n";
echo substr($str, 5);
echo "\n";
echo strtoupper($str);
echo "\n";
echo strtolower($str);
echo "\n";
echo ucfirst(strtolower($str));
echo "\n";

$greeting = "Hello, " . "World";
$greeting .= "How are you?";
echo $greeting;