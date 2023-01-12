<?php

class Subscription  {



    public function create()
    {

    }

    public function cancel()
    {

    }

    public function invoice()
    {

    }

    public function swap()
    {

    }
    private function findStripeCustomer()
    {

    }

}

interface Gateway
{

}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findCustomerSubscriptions()
    {

    }

}

class BraintreeGateway implements Gateway
{

}
