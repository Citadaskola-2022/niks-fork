<?php

namespace App\Cafe;

class CoffeeWithMilk extends coffee
{
    public int $volume;

    public function __construct()
    {
        parent::__construct();
        $this->volume = 250;
    }

    public function brew(): void
    {
        foreach ($this->portions as $i => $portion) {
            echo sprintf('%s adding %cml portion to coffee with milk' . PHP_EOL, $i , $portion);
        }
    }
}
