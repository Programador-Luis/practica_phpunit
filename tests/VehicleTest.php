<?php
use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php';

class VehicleTest extends TestCase {

    public function testAccelerate()
    {
        $car = new Vehicle('Toyota', 'Yaris', 20);
        $car->accelerate(40);
        $this->assertEquals('60', $car->finalSpeed());
    }

    public function testcurb()
    {
        $car = new Vehicle('Toyota', 'Yaris', 30);
        $car->curb(20);
        $this->assertEquals('10', $car->finalSpeed());
    }

    

}