<?php

namespace App\DebtCollection;

class Service
{

    private Rocky $collector;

    public function collectDebt(Agency $collector): void
    {
        $ownedAmount = mt_rand(100, 1000);

        $ammount = $collector->collect($ownedAmount);

        printf('Collected $ %s out of $ %d',
        $ammount,
        $ownedAmount,
        ) . PHP_EOL;
    }
}