<?php

declare(strict_types=1);

spl_autoload_register(function ($class){
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\','/', $class)) . '.php';
});

$transaction = new \app\ServiceCosts(200);

$transaction->process();

//require __DIR__ . '/../bootstrap/app.php';
