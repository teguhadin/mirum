<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '427335280988079',
    'client_secret' => 'e8891b0f027dff1ba488d997fc22d98a',
    'redirect' => 'http://localhost:8000/dashboard',
],

'google' => [
    'client_id' => '794649157653-pectsui2a96c9nm9t1ebtt1jq64s6vlq.apps.googleusercontent.com',
    'client_secret' => 'NIKZxI-B9iZmGIl1hc8Mc4Jw',
    'redirect' => 'http://localhost:8000/dashboard',
],

];
