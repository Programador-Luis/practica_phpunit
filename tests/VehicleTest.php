<?php

namespace practicas\tests;

use PHPUnit\Framework\TestCase;

class VehicleTest extends TestCase
{

    public function testSpeedInicial(): void
    {
        $vehicle = new Vehicle("Audi", "A4", "Manual");
        $this->assertEquals(0, $vehicle->getSpeed());
    }
    public function testAccelerate(): void
    {
        $vehicle = new Vehicle("Audi", "A4", "Manual");
        $vehicle->accelerate(200);
        $this->assertEquals(200, $vehicle->getSpeed());
    }

    public function testCurb(): void
    {
        $vehicle = new Vehicle("Audi", "A4", "Manual");
        $vehicle->accelerate(100);
        $vehicle->curb(50);
        $this->assertEquals(50, $vehicle->getSpeed());
        $vehicle->curb(100);
        $this->assertEquals(0, $vehicle->getSpeed());
    }

    public function testTransmissionType(): void
    {
        $vehicle = new Vehicle("Audi", "A4", "Manual");
        $this->assertEquals("Manual", $vehicle->getTransmissionType());
    }



    // TEST DEL COCHE //

    public function testNumberDoor(): void
    {
        $car = new Car("Audi", "A4", "Manual", 4);
        $this->assertEquals(4, $car->getNumberDoor());
    }

    public function testCarAccelerate(): void
    {
        $car = new Car("Audi", "A4", "Manual", 4);
        $car->accelerate(250);
        $this->assertEquals(240, $car->getSpeed());
    }


    // TEST DE LA BICICLETA //

    public function testMotorBikeCylinderType(): void
    {
        $motorbike = new MotorBike("Bera", "Socialista", "manual", 600);
        $this->assertEquals(600, $motorbike->getCylinderType());
    }

    public function testMotorBikeAccelerate(): void
    {
        $motorbike = new MotorBike("Bera", "Socialista", "manual", 600);
        $motorbike->accelerate(200);
        $this->assertEquals(180, $motorbike->getSpeed());
    }


    // TEST DEL CAMIÓN //

    public function testLoadCapacityTruck(): void
    {
        $truck = new Truck("FORD", "F-350", "manual", 0);
        $this->assertEquals(0, $truck->getLoadCapacity());
    }

    public function testTruckAccelerate(): void
    {
        $truck = new Truck("FORD", "F-350", "manual", 20.000);
        $truck->accelerate(200);
        $this->assertEquals(120, $truck->getSpeed());
    }
}
