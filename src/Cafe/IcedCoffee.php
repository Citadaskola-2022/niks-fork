<?php

namespace App\Cafe;

class IcedCoffee
{
    private Coffee $coffee;

    public function __construct(\App\cafe\Coffee $coffee)
    {
        $this->coffee = $coffee;
    }
     public function addIce(int $pieces): void
     {
         $this->ice += $pieces;
     }

     public function brew()
     {
         $this->coffee->brew();
     }
}