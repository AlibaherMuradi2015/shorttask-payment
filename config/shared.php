<?php
use Dotenv\Dotenv;
use Stripe\StripeClient;

class AppShared
{
    static function stripe()
    {
        return new  StripeClient(self::env('STRIPE_SECRIT_KEY'));
    }

    static function env($name)
    {
        Dotenv::createImmutable(__DIR__ . "/..")->load();
        return $_ENV[$name];
    }
}
