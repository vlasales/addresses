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
            'host' => 'ds135179.mlab.com',
            'port' => '35179',
            'database' => 'vlastimil_pospichal',
            'user' => 'vlastimil_pospichal',
            'password' => 'mysecretpassword',
        ],
    ],
];
