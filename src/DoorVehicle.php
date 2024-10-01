<?php

require 'Vehicle.php';

class DoorVehicle extends Vehicle{
    private $numero_puertas;

    public function __construct(
        int $numero_puertas
    )
    {
        $this->numero_puertas = $numero_puertas;
    }

    public function Door():int
    {
        return $this->numero_puertas;
    }
}