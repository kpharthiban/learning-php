<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n";
echo greet("Alice", "Hi") . "\n";
echo greet("Alice", "Hey", true) . "\n"; // need to follow the position of argument if following the default style of passing

echo greet(name: "David", shout: false); // doesn't care about the position of argument passed
