
<?php

use Practicas\Tests\Person;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {

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
}