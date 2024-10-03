<?php

namespace practicas\tests;

class Car extends Vehicle
{
    private $numberDoor;

    public function __construct(
        string $brand,
        string $model,
        float $speed,
        string $transmissionType,
        int $numberDoor
    ){

        parent::__construct($brand, $model,$speed, $transmissionType);
        $this->numberDoor = $numberDoor;

    }
}