<?php

return [
    // Default app name
    'default_app' => 'default',

    // Base configuration
    'base' => [
        'debug' => true,
        'log' => [
            'name' => 'youzan',
            'file' => __DIR__.'/youzan.log',
            'level'      => 'debug',
            'permission' => 0777,
        ]
    ],

    // Applications
    'apps' => [
        'default' => [
            'client_id' => '1b05ccf80c6fef424b',
            'client_secret' => '0e355be15cebcfd63195b0777bc399ad',
            'type' => \Hanson\Youzan\Youzan::PERSONAL, // 自用型应用
            'kdt_id' => '40536499', // store_id
        ],
        // 'another_app' => [
        //     'client_id' => 'XXXXXXXXX',
        //     'client_secret' => 'XXXXXXXXX',
        //     'redirect_uri' => 'http://YOURSITE.com/',
        // ],
        //
        // 'platform_app' => [
        //     'client_id' => '',
        //     'client_secret' => '',
        //     'type' => \Hanson\Youzan\Youzan::PLATFORM,
        // ],
    ]
];