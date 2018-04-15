<?php

$container = $app->getContainer();

$container['logger'] = function(Interop\Container\ContainerInterface $container) {

    $config = $container->get('settings')['logger'];

    $logger = new Monolog\Logger($config['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($config['path'], $config['level']));

    return $logger;
};

$container['database'] = function(Interop\Container\ContainerInterface $container) {

    $config = $container->get('settings')['mongo'];

    $uri = $server = sprintf('mongodb://%s:%s@%s:%d/%s',
        $config['user'],
        $config['password'],
        $config['host'],
        $config['port'],
        $config['database']
    );
    $client = new MongoDB\Client($uri);

    return $client->selectDatabase($config['database']);
};
