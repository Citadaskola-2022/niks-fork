<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

use Ramsey\Uuid\Uuid;

//$transaction = new \App\ServiceCosts(200);
//$transaction->process();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

//echo '<pre>';
var_dump($_ENV['DB_USER']);
var_dump($_ENV['DB_PASSWORD']);

//$inflector = InflectorFactory::create()->build();
//    $name = 'apple';
//printf(
//   'vienskaitlis: %s, daudzskaitlis: %s',
//    $name, $inflector->pluralize($name)
//);
//echo '<br>';


$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);

