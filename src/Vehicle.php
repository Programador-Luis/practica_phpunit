<?php

class Vehicle{

    private $brand;
    private $model;
    private $speed;

    public function __construct(
        string $brand,
        string $model,
        float $speed,
    )
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function accelerate($amount): void
    {
        if($amount > 0) {
            $this->speed += $amount;

        }
    }


    public function curb($amount): void
    {
        if($amount > 0 && $amount <= $this->speed) {
            $this->speed -= $amount;
            
        }
    }


    public function finalSpeed(): int
    {
        return $this->speed;
    }

    public function autoFull(): string
    {
        return "{$this->brand} del modelo {$this->model}";
    }

}