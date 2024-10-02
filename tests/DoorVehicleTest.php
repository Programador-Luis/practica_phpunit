<?php
use PHPUnit\Framework\TestCase;


class DoorVehicleTest extends TestCase {

    public function testDoorVehicle() : void
    {
        $doorcar = new DoorVehicle(2);
        $this->assertEquals(2, $doorcar->Door());

    }
}