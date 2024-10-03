<?php


use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {

    public function testApplyDiscount(): void
    {
        $product = new Product('Arroz', 100);
        $this->assertEquals(90, $product->applyDiscount(10));
    }



}