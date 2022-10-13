<?php

declare(strict_types=1);

require_once __DIR__ . '/../app/Car.php';
require_once __DIR__ . '/../app/Driver.php';
require_once __DIR__ . '/../app/Licence.php';

require_once __DIR__ . '/../app/Invoices/Credit/Bill.php';
require_once __DIR__ . '/../app/Invoices/Invoice/Bill.php';
require_once __DIR__ . '/../app/Invoices/Subscription/Bill.php';
require_once __DIR__ . '/../app/Invoices/Subscription/CustomerProfile.php';

require_once __DIR__ . '/../app/Notifications/Email.php';

use \App\Invoices\Credit\Bill as CreditBill;
use \App\Invoices\Invoice\Bill as InvoiceBill;
use \App\Invoices\Subscription\Bill as SubInvoice;

$creditBill = new CreditBill();
$subBill = new SubInvoice();

var_dump($creditBill, $subBill);

//require __DIR__ . '/../bootstrap/app.php';
