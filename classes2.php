<?php

// Class -> Tesla Y
// Object -> My Tesla Y or your Tesla Y

class Person {
    public function __construct(public string $name, public int $age) {}

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

// Class Inheritance
class Employee extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {}

    // Overriding method
    public function introduce(): string {
        return parent::introduce() . "I work as a {$this->position}"; // Calls the introduce method from parent class and combines with this string
    }
}

$people = [
    new Employee("Jerry", 45, "Manager"),
    new Person("Piotr", 37)
];

function introduce(Person $person) {
    echo $person->introduce() . "\n";
}

foreach ($people as $person) {
    introduce($person);
}