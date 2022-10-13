<?php

declare(strict_types=1);

namespace App\Invoices\Subscription;

use App\Notification\Email;

class Bill
{
    public function __construct()
    {
        $customerProfile = new CustomerProfile();

        $email = new Email();
    }

}

