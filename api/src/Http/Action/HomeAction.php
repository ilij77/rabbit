<?php
declare(strict_types=1);
namespace Api\Http\Action;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeAction
{
	public function __invoke (Request $request, Response $response, $args) {

		$data=json_encode([
			'name' => 'App API',
			'version' => '1.0',]);

		$response->getBody()->write($data);
		return $response->withHeader('Content-Type', 'application/json');
	}
}