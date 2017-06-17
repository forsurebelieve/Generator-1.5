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
	define("FIREBASE_DEFAULT_URL",'https://projectname.firebaseio.com');
	define("FIREBASE_DEFAULT_TOKEN",'FirebaseSecretKey');
	define("FIREBASE_DEFAULT_PATH",'/');
	
	/**************************************************************************
	* Firebase database config.
	* Firebase database connection provided in kreait/firebase-php
	**************************************************************************/	
	define("FIREBASE_DATABASE_URL",'https://projectname.firebaseio.com');
	define("FIREBASE_SERVICE_ACCOUNT_JSON","futharkGenerator.serviceAccount.json"); // relative path to the JSON file
