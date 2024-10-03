<?php

namespace practicas\tests;
class Employee extends Person
{

    private $salary;

    public function __construct(
        string $name,
        string $lastName,
        int $age,
        float $salary
    ) {
        parent::__construct($name, $lastName, $age);
        $this->salary = $salary;
        
    }

    public function annualSalary(): float
    {
        return $this->salary * 12;
    }
}
