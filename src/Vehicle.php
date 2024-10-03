<?php

namespace practicas\tests;

class Vehicle
{

    protected $brand;
    protected $model;
    protected $speed = 0;
    protected $transmissionType;

    public function __construct(
        string $brand,
        string $model,
        string $transmissionType
    ) {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = 0;
        $this->transmissionType = $transmissionType;
    }



    public function accelerate($amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("La aceleración no debe ser en negativo chamo");
        }

        $this->speed += $amount;
    }

    public function curb($amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("No puedes frenar en negativo weon");
        }
        $this->speed -= $amount;

        if ($this->speed < 0) {
            $this->speed = 0;
        }
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }

    public function getTransmissionType(): string
    {
        return $this->transmissionType;
    }
}
