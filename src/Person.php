<?php

namespace practicas\tests;

class Person
{

    private $name;
    private $lastName;
    private $age;

    public function __construct(
        string $name,
        string $lastName,
        int $age

    ) {

        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function fullName(): string
    {
        return 'Mi nombre completo es: ' . $this->name . ' ' . $this->lastName;
    }

    public function isOlderOfAge(): string
    {
        if ($this->age < 18) {
            return 'No es mayor';
        } else {
            return 'Es mayor';
        }
        
    }
}
