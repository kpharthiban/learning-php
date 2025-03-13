<?php

// Class -> Tesla Y
// Object -> My Tesla Y or your Tesla Y

class Person {
    // Way 1 of defining data and constructor
    // public string $name;
    // public int $age;

    // // Class Constructor - to initialize data
    // public function __construct(string $name, int $age) {
    //     $this->name = $name;
    //     $this->age = $age;
    // }

    // Way 2 of defining data and constructor - just by initializing data in constructor
    public function __construct(public string $name, public int $age) {}

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

$person = new Person("Alice", 30);
echo $person->introduce();
$person2 = new Person("Piotr", 37);
echo $person2->introduce();