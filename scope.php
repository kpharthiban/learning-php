<?php

// Way 1 - to use global variable (pass value)
$superhero = "Superman"; // Global scope variable

function revealIdentity($superhero) {
    echo "$superhero real name is Clark Kent\n";
}

revealIdentity($superhero);

// Way 2 - declare the global variable inside function
function revealIdentity2() {
    global $superhero; // any changes here will modify the original variable
    $message = "real name is Clark Kent\n"; // Local scope variable
    echo "$superhero $message";
}

revealIdentity2();

function countVisitors() {
    static $visitorCount = 0; // Static preserves the state of the variable in the function -> the second time the program runs, it skips this line
    $visitorCount++;
    echo "Visiot #$visitorCount has arrived\n";
}

countVisitors();
countVisitors();
countVisitors();