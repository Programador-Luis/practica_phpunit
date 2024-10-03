<?php

namespace practicas\tests;

interface BankingOperations
{

    public function deposit($mount);

    public function withDraw($mount);
}
