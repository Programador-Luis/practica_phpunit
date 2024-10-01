<?php
use PHPUnit\Framework\TestCase;


class DoorVehicleTest extends TestCase {

    public function testDoorVehicle() 
    {
        $doorcar = new DoorVehicle(2);
        $this->assertEquals(2, $doorcar->Door());

    }
}