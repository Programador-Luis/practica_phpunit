<?php

use PHPUnit\Framework\TestCase;
use practicas\tests\Dog;
use practicas\tests\Cat;

class AnimalTest extends TestCase
{

    public function testDog(): void
    {
        $dog = new Dog();
        $this->assertEquals("Guau Guau", $dog->sound());
    }

    public function testCat(): void
    {
        $cat = new Cat();
        $this->assertEquals("Meow Meow", $cat->sound());
    }
}
