<?php

namespace practicas\tests;
class Manager extends Employee
{

    private $bonus;

    public function __construct(
        string $name,
        string $lastName,
        int $age,
        float $salary,
        float $bonus
    ) {
        parent::__construct($name, $lastName, $age, $salary);

        $this->bonus = $bonus;
    }


    public function addBonus(): float
    {
        return parent::annualSalary() + $this->bonus;
    }
}
