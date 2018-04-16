<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


/**
 * - $this within the closure context represents an instance of Slim\App
 * - you can use $this->database which is an instance of MongoDB\Database and $this->logger that represents Monolog\Logger
 */

$app->post('/address', function(Request $request, Response $response, array $args) {
	$response->getBody()->write("<pre>" . var_dump($args) . "</pre>");
	return $response;
});
$app->patch('/address/{id}', function(Request $request, Response $response) {});
$app->delete('/address/{id}', function(Request $request, Response $response) {});
$app->get('/address[/{id}]', function(Request $request, Response $response) {
	$response->getBody()->write("Nazdar");
	return $response;
});
$app->get('/', function(Request $request, Response $response) {
	$response->getBody()->write(<<<EOT
	<p><a href="/address">Returns all available address</a></p>
	<form action="/address" method="POST">
		<ul>
			<li><input type="text" name="country" value="CZ"></li>
			<li><input type="text" name="city" value="Brno"></li>
			<li><input type="text" name="Street" value="Husova"></li>
			<li><input type="text" name="postalcode" value="60200"></li>
			<li><input type="text" name="number" value="6"></li>
			<li><input type="text" name="numberAddition"></li>
			<li><button name="newAddress" value="Send">Send new address"</button></li>
		</ul>
	</form>
EOT
			);
   return $response;
});
