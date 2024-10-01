<?php
use PHPUnit\Framework\TestCase;



class RectangleTest extends TestCase
{
    public function testCalculateArea()
    {
        $rectangle = new Rectangle(2,5);
        $this->assertEquals(10, $rectangle->calculateArea());
    }

    public function testCalculatePerimeter()
    {
        $rectangle = new Rectangle(2,5);
        $this->assertEquals(14, $rectangle->calculatePerimeter());
    }

}