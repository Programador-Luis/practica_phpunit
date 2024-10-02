<?php


class Rectangle{

    private $broad;
    private $high;


    public function __construct(
        float $broad,
        float $high
    )
    {
        $this->broad = $broad;
        $this->high = $high;
    }

    public function calculateArea(): float
    {
        return $this->broad * $this->high;
    }

    public function calculatePerimeter(): float
    {
        return 2 * ($this->broad + $this->high);
    }




}