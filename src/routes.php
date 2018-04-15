<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


/**
 * - $this within the closure context represents an instance of Slim\App
 * - you can use $this->database which is an instance of MongoDB\Database and $this->logger that represents Monolog\Logger
 */

$app->post('/address', function(Request $request, Response $response) {});
$app->patch('/address/{id}', function(Request $request, Response $response) {});
$app->delete('/address/{id}', function(Request $request, Response $response) {});
$app->get('/address[/{id}]', function(Request $request, Response $response) {});
