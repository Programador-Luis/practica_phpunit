<?php

use PHPUnit\Framework\TestCase;
use practicas\tests\BanckAccount2;

class BanckAccount2Test extends TestCase
{
    public function testDeposit(): void
    {
        $account = new BanckAccount2(10);
        $account->deposit(40);
        $this->assertEquals(50, $account->money());
    }

    public function testWithdraw(): void
    {
        $account = new BanckAccount2(10);
        $account->withdraw(5);
        $this->assertEquals(5, $account->money());
    }
}
