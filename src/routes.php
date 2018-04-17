<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * - $this within the closure context represents an instance of Slim\App
 * - you can use $this->database which is an instance of MongoDB\Database and $this->logger that represents Monolog\Logger
 */
$app->post('/address', function(Request $request, Response $response) {
	$address = new Address($request->getParsedBody());
	try {
		$address->add($this->database);
		return $response->withJson($address, 201);
	} catch (Exception $e) {
		$address->log($this->logger);
		return $response->withJson($e->getMessage(), 401);
	}
});
$app->patch('/address/{id}', function(Request $request, Response $response) {
	$address = new Address($request->getParsedBody());
	try {
		$address->patch($this->database);
		return $response->withJson($address, 201);	
	} catch (Exception $e) {
		$address->log($this->logger);
		return $response->withJson($e->getMessage(), 401);
	}
});
$app->delete('/address/{id}', function(Request $request, Response $response) {
	$address = new Address($request->getParsedBody());
	try {
		$address->delete($this->database);
		return $response->withJson($address, 201);
	} catch (Exception $e) {
		$address->log($this->logger);
		return $response->withJson($e->getMessage(), 401);
	}
});
$app->get('/address[/{id}]', function(Request $request, Response $response) {
	$address = new Address($request->getParsedBody());
	try {
		$page = $address->show($this->database);
		return $response->getBody()->write($page);
	} catch (Exception $e) {
		$address->log($this->logger);
		return $response->withJson($e->getMessage(), 401);
	}
});
$app->get('/', function(Request $request, Response $response) {
	$form = new Formular();
	$response->getBody()->write((string) $form);
	return $response;
});