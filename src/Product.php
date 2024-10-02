<?php

class Product{

    private $name;
    private $price;


    public function __construct(
        string $name,
        float $price,
    )
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function applyDiscount($percent): float
    {
        $mount = $this->price * ($percent / 100);

        $priceTotal = $this->price - $mount;

        return $priceTotal;
    }


    public function showInfo(): string
    {
        return "{$this->name} tiene un costo de {$this->applyDiscount(50)}";
    }



}
