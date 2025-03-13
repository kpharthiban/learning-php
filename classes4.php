<?php

class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $num): float {
        return $num*$num;
    }
}

// Singleton Software Design Pattern
// Expensive Resources
class Connection {
    private static $instance = null;  
    private function __construct() {}

    // Make sure only one instance is created
    // Use static to be able to extend it (can use Connection only if just for it and no child classes)
    public static function singleton() {
        if (null === static::$instance){
            static::$instance = new static();
        }
        return Connection::$instance;
    }
}

$connection = Connection::singleton();

// How to access static variables and methods in a class
var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);