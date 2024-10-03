<?php

namespace practicas\tests;

class BanckAccount2 implements BankingOperations
{

    private $saldo;

    public function __construct(
        int $saldo
    ) {

        $this->saldo = $saldo;
    }

    public function deposit($mount): void
    {
        $this->saldo += $mount;
    }

    public function withDraw($mount)
    {
        if ($mount > $this->saldo) {
            return "No puedes sacar mas de lo que tienes";
        }
        $this->saldo -= $mount;
    }

    public function money()
    {
        return $this->saldo;
    }
}
