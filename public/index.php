<?php

declare(strict_types=1);

require_once '../src/Car.php';


// Homework: Driver (name, surname, age)

$car = (new Car(1000, 'AB-1234', 14.6))
    ->addKilometers(200)
    ->addKilometers(500);

$liters = $car->getConsumedLiters();

$car = null;

var_dump($liters);


//require __DIR__ . '/../bootstrap/app.php';
