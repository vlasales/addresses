<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => Monolog\Logger::DEBUG,
        ],
        'mongo' => [
            'host' => '',
            'port' => '',
            'user' => '',
            'password' => '',
            'database' => '',
        ],
    ],
];
