<?php 
	define('SITE_ROOT','//' . $_SERVER['SERVER_NAME']);
	
	if (isset($_SERVER['NFSN_SITE_ROOT'])) {
		define('DOCUMENT_ROOT',$_SERVER['NFSN_SITE_ROOT']);
	} else {
		define('DOCUMENT_ROOT',dirname($_SERVER['DOCUMENT_ROOT']));
	}

	require_once DOCUMENT_ROOT . '/protected/config.php';

	require_once DOCUMENT_ROOT . '/protected/vendor/autoload.php';
	
	$title = 'Futhark Power Generator' . APP_VERSION;
	
	require_once DOCUMENT_ROOT . '/protected/routes.php';
