<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | Used by some providers to determine if push should send to
    | a production app or a testing app.
    |
    */
    'live' => env('PARSE_LIVE', true),

    /*
    |--------------------------------------------------------------------------
    | Queue
    |--------------------------------------------------------------------------
    |
    | Name of queue to send push notifications from
    |
    */
    'queue' => null,

    /*
    |--------------------------------------------------------------------------
    | Provider
    |--------------------------------------------------------------------------
    |
    | Load your desired Push provider.
    |
    | Make sure your provider extends the push interface to make sure
    | that all the required methods has been implemented
    |
    */
    'provider' => function($app) {
        return new \Nodes\Push\Providers\UrbanAirship(
            config('nodes.push.urban-airship.apps'),
            config('nodes.push.urban-airship.default')
        );
    },

    /*
    |--------------------------------------------------------------------------
    | Parse applications
    |--------------------------------------------------------------------------
    |
    | Credentials can be found at Parse.com under your app's settings.
    |
    */
    'parse' => [

        /*
        |--------------------------------------------------------------------------
        | Test application credentials
        |--------------------------------------------------------------------------
        */
        'development' => [
            'app_id' => env('PARSE_DEV_APP_ID'),
            'rest_key' => env('PARSE_DEV_REST_KEY'),
            'master_key' => env('PARSE_DEV_MASTER_KEY')
        ],

        /*
        |--------------------------------------------------------------------------
        | Live application credientials
        |--------------------------------------------------------------------------
        */
        'live' => [
            'app_id' => null,
            'rest_key' => null,
            'master_key' => null
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Urban Airship applications
    |--------------------------------------------------------------------------
    |
    | Settings used by the Urban Airship Push provider
    |
    */
    'urban-airship' => [

        /*
        |--------------------------------------------------------------------------
        | Default app group
        |--------------------------------------------------------------------------
        */
        'default' => 'nodes',

        /*
        |--------------------------------------------------------------------------
        | App groups
        |--------------------------------------------------------------------------
        |
        | Since Urban Airship can only have one certificate per app, most of the
        | time, you'll have two apps, one for development and one for production.
        |
        | Therefore apps are split into "app groups". An app group can contain as
        | many apps as you like. But must all be in an associative array.
        |
        | When sending a push message with Urban Airship, the push provider will
        | take a "app group" and look through each array in that group and send
        | the push message to that app.
        |
        | All apps registered within an "app group" must contain three keys:
        | - app_key
        | - app_secret
        | - master_secret
        */
        'apps' => [

            /*
            |--------------------------------------------------------------------------
            | Nodes test app
            |--------------------------------------------------------------------------
            */
            'nodes' => [
                'development' => [
                    'app_key' => env('URBAN_AIRSHIP_DEV_APP_KEY'),
                    'app_secret' => env('URBAN_AIRSHIP_DEV_APP_SECRET'),
                    'master_secret' => env('URBAN_AIRSHIP_DEV_MASTER_SECRET'),
                ],

                // Example of another app in an "app group"
                /*
                'production' => [
                    'app_key' => null,
                    'app_secret' => null,
                    'master_secret' => null,
                ]
                */
            ]
        ]
    ]
];