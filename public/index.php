<?php 
	define('APP_VERSION','v1.6beta');

	define('SITE_ROOT','//' . $_SERVER['SERVER_NAME']);
	define('DOCUMENT_ROOT',dirname($_SERVER['DOCUMENT_ROOT']));
	
	require DOCUMENT_ROOT . '/vendor/autoload.php'; //TODO Switch to a different PSR-4 Autoloader

	$title = 'Futhark Power Generator' . APP_VERSION;
	
	require_once(DOCUMENT_ROOT . '/controllers.php');
	
	$router = new AltoRouter();
	
	$router->map('GET',	'/',								'controller_Home');
	$router->map('GET',	'/a/roll',							'controller_Reroll_All');
	$router->map('GET',	'/list',							'controller_List');
	$router->map('GET',	'/credits',							'controller_Credits');
	$router->map('GET',	'/multi/[i:count]',					'controller_Multi');
	$router->map('GET',	'/load/s/[:loadid]',				'controller_Load_Saved');
	$router->map('GET',	'/load/[:type]/[:flavor]/[:twist]',	'controller_Load');
	$router->map('GET',	'/donate',							'controller_Donate');

	$match = $router->match();

	// call closure or throw 404 status
	if( $match && is_callable( $match['target'] ) ) {
		call_user_func( $match['target'], $match['params'] ); 
	} else {
		// no route was matched
		header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
		echo '404!';
	}
