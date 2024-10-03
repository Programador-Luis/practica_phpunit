<?php

namespace practicas\tests;
class BankAccount {

    private $holder;
    private $balance;


    public function __construct(
        string $holder,
        int $balance,
    )
    {
        $this->holder = $holder;
        $this->balance = $balance;
    }

    public function holder(): string
    {
        return $this->holder;
    }


    public function deposit($amount): void
    {
        if ($amount > 0)
        {

            $this->balance += $amount;

        }
        
    }

    public function withdraw($amount): void
    {
        if ($amount > 0 && $amount <= $this->balance)
        {

            $this->balance -= $amount;

        }

    }

    public function showBalance(): int
    {

        return $this->balance;

    }



}
