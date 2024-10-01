<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;


class BankAccountTest extends TestCase
{
    public function testHolder()
    {
        $account = new BankAccount('Luis', 10);
        $this->assertEquals('Luis', $account->holder());
    }

    public function testDeposit()
    {
        $account = new BankAccount('Luis', 10);
        $account->deposit(40);
        $this->assertEquals(50, $account->showBalance());
    }

    public function testWithdraw()
    {
        $account = new BankAccount('Luis', 50);
        $account->withdraw(20);
        $this->assertEquals(30, $account->showBalance());
    }

    public function testWithdrawMoreThanBalance()
    {
        $account = new BankAccount('Luis', 10);
        $account->withdraw(20);
        $this->assertEquals(10, $account->showBalance());
    }
}
