<?php
	/* Rename this file to "passwords.sample.php" and use your own connection strings */
	
	$type = 'mysql';
	$server = 'server location';
	$database = 'dbname';
	
	$readOnlyUser = 'Username for a db user with READ-ONLY access';
	$readOnlyPass = 'Password for that user';
	
	$writeOnlyUser = 'Username for a db user with WRITE access';
	$writeOnlyPass = 'Password for that user';
	
	$userInformationUser = 'Username for a db user with Select / Insert / Update access to USERS';
	$userInformationPass = 'Password for that user';
	
	$PDOConnectionString = 
		$type . 
		':host=' . $server . 
		';dbname=' . $database;
	
	$dbRead = new PDO($PDOConnectionString, $readOnlyUser, $readOnlyPass);
	$dbWrite = new PDO($PDOConnectionString, $writeOnlyUser, $writeOnlyPass);
	$dbUserAccess = new PDO($PDOConnectionString, $userInformationUser, $userInformationPass);
?>