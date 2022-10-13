<?php

declare(strict_types=1);

require_once '../app/Car.php';
require_once '../app/Driver.php';
require_once '../app/Licence.php';

$car = (new Car('AB-1234', 14.6, 256_000))
    ->addKilometers(200)
    ->addKilometers(500);

function someFunction()
{
    echo 'this is really important';
}

$car->driver = new Driver();

echo $car->getDriver()?->getLicence(someFunction())->expirationDate ?? 'expiration date is not found';

//require __DIR__ . '/../bootstrap/app.php';
