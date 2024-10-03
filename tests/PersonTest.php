
<?php

use practicas\tests\Employee;
use practicas\tests\Manager;
use practicas\tests\Person;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    public function testFullname()
    {
        $person = new Person('Juan', 'Perez', 20);
        $this->assertEquals("Mi nombre completo es: Juan Perez", $person->fullname());
    }

    public function testIsOlderOfAge()
    {
        $person = new Person("Juan", "Perez", 17);
        $this->assertEquals("No es mayor", $person->isOlderOfAge());
    }

    public function testgetAnnualSalary(): void
    {
        $salary = new Employee("Juan", "Perez", 20, 100);
        $this->assertEquals(1200, $salary->annualSalary());
    }

    public function testAddBonus(): void
    {
        $bonus = new Manager("Juan", "Perez", 20, 100, 10);
        $this->assertEquals(1210, $bonus->addBonus());
    }
}
