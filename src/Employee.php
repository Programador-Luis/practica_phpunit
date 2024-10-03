<?php

namespace Practicas\Tests;

class Employee extends Person
{

    private $salary;

    public function __construct(
        float $salary
    ) {

        $this->salary = $salary;
    }

    public function getAnnualSalary(): float
    {
        return $this->salary *= 12;
    }
}
