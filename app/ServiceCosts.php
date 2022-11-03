<?php

namespace app;

class ServiceCosts
{

    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process(): void
    {
        echo "Total amount is {$this->amount} for this service";
    }



}