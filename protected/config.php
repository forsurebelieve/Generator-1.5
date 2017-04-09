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
	define("FIREBASE_CONNECTION_FILE",DOCUMENT_ROOT . '/protected/futharkgenerator-firebase-adminsdk-5uyfr-ec35410d9b.json');
	
	define("FIREBASE_DEFAULT_URL",'https://futharkgenerator.firebaseio.com');
	define("FIREBASE_DEFAULT_TOKEN",'II8N7YkggxtWa5l9os6h6TE5VvqtyiBI5qVGR5w3');
	define("FIREBASE_DEFAULT_PATH",'/');

 ?> 