<?php

declare(strict_types=1);

require_once '../app/Car.php';


// Homework: Driver (name, surname, age)

$car = (new Car(1000, 'AB-1234', 14.6))
    ->addKilometers(200)
    ->addKilometers(500);

$liters = $car->getConsumedLiters();

$car = null;

var_dump($liters);

/**
 * stdClass examples
 */
$json = '{"a": "Honda", "b": "Kawasaki", "c": "Suzuki"}';

// 1. casting as array
$exampleTwo = json_decode($json, true);
echo 'Type: ' . gettype($exampleTwo) . ', ';
echo '"a" value: ' . $exampleTwo['a'];
echo '</br>' . PHP_EOL;
var_dump($exampleTwo);

echo '</br>' . PHP_EOL;
echo '</br>' . PHP_EOL;

// 2. casting as object
$exampleTwo = json_decode($json);
echo 'Type: ' . gettype($exampleTwo) . ', ';
echo '"b" value: ' . $exampleTwo->b;
echo '</br>' . PHP_EOL;
var_dump($exampleTwo);

echo '</br>' . PHP_EOL;
echo '</br>' . PHP_EOL;

// 3. creating new stdClass object
$exampleNewObject = new \stdClass();
$exampleNewObject->a = 'KTM';
$exampleNewObject->b = 'BMW';
$exampleNewObject->c = 'Triumph';

var_dump($exampleNewObject); // object
echo '</br>' . PHP_EOL;
var_dump((array) $exampleNewObject); // casting to array
echo '</br>' . PHP_EOL;
echo '</br>' . PHP_EOL;

// 4. From array to object
$array = [1, 2, 3];
$object = (object) $array;
//var_dump($object);
echo '</br>' . PHP_EOL;
var_dump($object->{1});
echo '</br>' . PHP_EOL;

echo '</br>' . PHP_EOL;


//require __DIR__ . '/../bootstrap/app.php';