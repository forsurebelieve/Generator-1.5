<?php
	/* 
	 * configuration file for things that will be on every page
	 */
	
	/**************************************************************************
	* General App config.
	**************************************************************************/

	define('APP_VERSION','v1.6beta');

	/**************************************************************************
	* Firebase database config.
	* Firebase database connection provided in ktamas77/firebase-php
	**************************************************************************/
	define("FIREBASE_CONNECTION_FILE",DOCUMENT_ROOT . 'path/to/firebase/secure.json');
	
	define("FIREBASE_DEFAULT_URL",'https://projectname.firebaseio.com');
	define("FIREBASE_DEFAULT_TOKEN",'FirebaseSecretKey');
	define("FIREBASE_DEFAULT_PATH",'/');

 ?> 