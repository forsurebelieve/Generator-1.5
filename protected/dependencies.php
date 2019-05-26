<?php
use Slim\App;
return function (App $app) {
	$container = $app->getContainer();
	
	// view renderer
	$container['renderer'] = function ($c) {
		$settings = $c->get('settings')['renderer'];
		return new \Slim\Views\PhpRenderer($settings['template_path']);
	};
	
	// monolog
	$container['logger'] = function ($c) {
		$settings = $c->get('settings')['logger'];
		$logger = new \Monolog\Logger($settings['name']);
		//$logger->pushProcessor(new \Monolog\Processor\IntrospectionProcessor());
		$logger->pushHandler(new \Monolog\Handler\ChromePHPHandler());
		$logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
		return $logger;
	};

	// firebase
	$container['firebase'] = function ($c) {
		$settings = $c->get('settings')['firebase'];
		$serviceAccount = \Kreait\Firebase\ServiceAccount::fromJsonFile($settings['ServiceAccountJSON']);
		$firebase = (new \Kreait\Firebase\Factory)
			->withServiceAccount($serviceAccount)
			->withDatabaseUri($settings['DatabaseURL'])
			->create();
		return $firebase;
	};

	// 403 handler
	$container['notAllowedHandler'] = function ($c) {
		return function ($request, $response) use ($c) {
			return $response->withStatus(403)
				->withHeader('Content-Type', 'text/html')
				->write('Page not found');
		};
	};

	// 404 handler
	$container['notFoundHandler'] = function ($c) {
		return function ($request, $response) use ($c) {
			return $response->withStatus(404)
				->withHeader('Content-Type', 'text/html')
				->write('Page not found');
		};
	};

	// 405 handler
	$container['notAllowedHandler'] = function ($c) {
		return function ($request, $response, $methods) use ($c) {
			return $response->withStatus(405)
				->withHeader('Allow', implode(', ', $methods))
				->withHeader('Content-type', 'text/html')
				->write('Method must be one of: ' . implode(', ', $methods));
		};
	};
/*
	// 500 handler
	$container['errorHandler'] = function ($c) {
		return function ($request, $response, $exception) use ($c) {
			return $response->withStatus(500)
				->withHeader('Content-Type', 'text/html')
				->write('Something went wrong!');
		};
	};*/
};