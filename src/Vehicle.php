<?php

namespace practicas\tests;

class Vehicle
{

    private $brand;
    private $model;
    private $speed;
    private $transmissionType;

    public function __construct(
        string $brand,
        string $model,
        float $speed,
        string $transmissionType
    ) {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = 10;
        $this->transmissionType = $transmissionType;
    }



    public function accelerate($amount): void
    {
        if ($amount > 0) {
            $this->speed += $amount;
        }
    }

    public function curb($amount): void
    {
        if ($amount > 0 && $amount <= $this->speed) {
            $this->speed -= $amount;
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
