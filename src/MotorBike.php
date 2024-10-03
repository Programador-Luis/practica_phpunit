<?php

use practicas\tests\Vehicle;

class MotorBike extends Vehicle
{
    private $cylinderType;

    public function __construct(
        string $brand,
        string $model,
        float $speed,
        string $transmissionType,
        int $cylinderType
    ) {
        parent::__construct($brand, $model, $speed, $transmissionType);
        $this->cylinderType = $cylinderType;
    }


}
