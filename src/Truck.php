<?php
use practicas\tests\Vehicle;

class Truck extends Vehicle
{
    private $loadCapacity;


    public function __construct(
    string $brand,
    string $model,
    float $speed,
    string $transmissionType,
    float $loadCapacity
    
    ) {
        parent::__construct($brand, $model, $speed, $transmissionType);
        $this->loadCapacity = $loadCapacity;
    }

    

}