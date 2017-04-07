<?php 
	define('SITE_ROOT','//' . $_SERVER['SERVER_NAME']);
	define('DOCUMENT_ROOT',dirname($_SERVER['DOCUMENT_ROOT']));
	
	require_once DOCUMENT_ROOT . '/private/config.php';

	require_once DOCUMENT_ROOT . '/vendor/autoload.php';
	
	$title = 'Futhark Power Generator' . APP_VERSION;
	
	require_once DOCUMENT_ROOT . '/private/routes.php';
	

	
	
	
	
	
