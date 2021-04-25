<?php

require "vendor/autoload.php";
require_once('config/shared.php');

class StripeAccount
{

    static  function createAccount()
    {
        $account = AppShared::stripe()->accounts->create([
            'country' => 'US',
            'type' => 'express',
        ]);
        return $account->id;
    }

    static function createAccountLink($accoundId)
    {
        $account_links = AppShared::stripe()->accountLinks->create([
            'account' => $accoundId,
            'refresh_url' => AppShared::env('App_BASE_URL') . '/reauth',
            'return_url' => AppShared::env('App_BASE_URL') . '/return',
            'type' => 'account_onboarding',
        ]);

        return $account_links->url;
    }
}
