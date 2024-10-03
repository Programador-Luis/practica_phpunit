<?php

namespace practicas\tests;

class Truck extends Vehicle
{
    protected $loadCapacity;


    public function __construct(
        string $brand,
        string $model,
        string $transmissionType,
        float $loadCapacity

    ) {
        parent::__construct($brand, $model, $transmissionType);
        $this->loadCapacity = $loadCapacity;
    }

    public function accelerate($amount): void
    {
        parent::accelerate($amount);
        if ($this->speed > 120) {
            $this->speed = 120;
        }
    }

    public function loadCapacity($loadCapacity): void
    {
        if ($this->loadCapacity < 0) {
            throw new \InvalidArgumentException("No puedes tener una carga en negativo weon");
        }
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity(): float
    {
        return $this->loadCapacity;
    }
}
