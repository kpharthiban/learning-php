<?php

function greet($name) {
    return "Hello, $name\n";
}

echo greet("Alice");

// The default parameter i.e. ($time = "day") is optional to receive an argument
// Required argument parameter should be infront
function greetWithTime($name, $time = "day") {
    return "Good $time, $name\n";
}

echo greetWithTime("Bob");
echo greetWithTime("Charlie", "evening");