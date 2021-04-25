<?php

require_once('config/shared.php');

class StripePayment
{

    static  function pay()
    {
        $account = AppShared::stripe()->paymentIntents->create([
            'country' => 'US',
            'type' => 'express',
        ]);
        return $account->id;
    }
}
