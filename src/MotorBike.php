<?php

namespace practicas\tests;

class MotorBike extends Vehicle
{
    protected $cylinderType;

    public function __construct(
        string $brand,
        string $model,
        string $transmissionType,
        int $cylinderType
    ) {
        parent::__construct($brand, $model, $transmissionType);
        $this->cylinderType = $cylinderType;
    }

    public function accelerate($amount): void
    {
        parent::accelerate($amount);
        if ($this->speed > 180) {
            $this->speed = 180;
        }
    }

    public function cylinderType($cylinderType): void
    {
        if ($this->cylinderType < 0) {
            throw new \InvalidArgumentException("No puedes tener un cilindro en negativo weon");
        }
        $this->cylinderType = $cylinderType;
    }

    public function getCylinderType(): int
    {
        return $this->cylinderType;
    }
}
