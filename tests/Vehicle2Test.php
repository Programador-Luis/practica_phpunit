<?php

use pruebas\tests\Car;
use pruebas\tests\Bicycle;
use PHPUnit\Framework\TestCase;


class Vehicle2Test extends TestCase
{

    public function testCar(): void
    {
        $auto = new Car();
        $this->assertEquals("El coche se está moviendo wey", $auto->move());
    }

    public function testBicycle(): void
    {
        $bicycle = new Bicycle();
        $this->assertEquals("La bicicleta se está moviendo wey", $bicycle->move());
    }
}
