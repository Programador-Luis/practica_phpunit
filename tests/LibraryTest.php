<?php

namespace practicas\tests;
use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase {

    public function testLend(): void
    {

        $libreria = new Library('Pedro', 'Luis', 2022, 'false');
        $this->assertEquals('false', $libreria->lend());


    }



}