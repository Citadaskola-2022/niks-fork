<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$coffee = new \App\Cafe\CoffeeWithMilk();

$coffee->volume = 1000;

$coffee->prepare(30);
$coffee->prepare(30);
$coffee->prepare(30);
$coffee->prepare(30);

makeCoffee($coffee);

$coffee->brew();

    function makeCoffee(\App\Cafe\Coffee $coffee) {
        $coffee->addmilk();
}

$coffee->brew();