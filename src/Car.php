<?php

namespace practicas\tests;

class Car extends Vehicle
{
    protected $numberDoor;

    public function __construct(
        string $brand,
        string $model,
        string $transmissionType,
        int $numberDoor
    ) {

        parent::__construct($brand, $model, $transmissionType);
        $this->numberDoor = $numberDoor;
    }

    public function accelerate($amount): void
    {
        parent::accelerate($amount);
        if ($this->speed > 240) {
            $this->speed = 240;
        }
    }

    public function getNumberDoor(): int
    {
        return $this->numberDoor;
    }
}
