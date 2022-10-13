<?php

declare(strict_types=1);

namespace src\Invoices\Sub;

class Bill
{
    public function __construct()
    {
        $customerProfile = new CustomerProfile();

        $email = new \src\Notifications\Email();

        var_dump($email);
    }
}