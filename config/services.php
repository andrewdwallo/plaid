<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'plaid' => [
        'clientId' => env('PLAID_CLIENT_ID'),
        'secret' => env('PLAID_CLIENT_SECRET'),
        'env' => env('PLAID_ENVIRONMENT', 'sandbox'),
        'clientName' => env('PLAID_CLIENT_NAME'),
        'products' => env('PLAID_PRODUCTS'),
        'countryCodes' => env('PLAID_COUNTRY_CODES'),
        'language' => env('PLAID_LANGUAGE'),
    ]

];
