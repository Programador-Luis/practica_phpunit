<?php

use PHPUnit\Framework\TestCase;
use practicas\tests\BankAccount;


class BankAccountTest extends TestCase
{
    public function testHolder(): void
    {
        $account = new BankAccount('Luis', 10);
        $this->assertEquals('Luis', $account->holder());
    }

    public function testDeposit(): void
    {
        $account = new BankAccount('Luis', 10);
        $account->deposit(40);
        $this->assertEquals(50, $account->showBalance());
    }

    public function testWithdraw(): void
    {
        $account = new BankAccount('Luis', 50);
        $account->withdraw(20);
        $this->assertEquals(30, $account->showBalance());
    }

    public function testWithdrawMoreThanBalance(): void
    {
        $account = new BankAccount('Luis', 10);
        $account->withdraw(20);
        $this->assertEquals(10, $account->showBalance());
    }
}
