<?php
require_once('pbkdf2.class.php');
require_once($serverRoot . 'config/passwords.php'); // .gitignore'd
/**
 * Class User 
 */
class User {
	/** @var int  Contains the UID of the User (from the db) */
	public $UID;
	
	/** @var string  Contains the User's login name  */
	protected $LoginName;
	
	/** @var string  Contains the display name for the User */
	protected $DisplayName;
	
	/** @var  string  Contains the user's password (as supplied)
	  * parsed by pbkdf2 */
	protected $Password;
	
	/** @var  bool  is the user logged in? */
	public $LoggedIn;
	
	/** @param string $reason The reason for the logout
	  * @return string Display string for the User */
	public function logout($reason)	{
	$this->UID = "";
	$this->LoginName = "";
	$this->Displayname = "";
	$this->Password = "";
	$this->LoggedIn = False;
	
	switch ($reason) {
		case "Bad Login":
			return 'Invalid Login name or Password';
	
		case "Logout":
			return 'Logout successful.';
	
		default:
			return 'Logout successful.';
		}
	}
	
	/** @param string $login The user's login name
	  * @param string $pass The password (plaintext) supplied by the user
	  * @return string An error message for delivery to the users, or 'Logged in' if login was successful */
	public function login($login,$pass)	{
		global $dbUserAccess;
		
		$checkUser = $dbUserAccess->prepare("SELECT UID, Password FROM users WHERE LoginName = :login");
		$checkUser->bindParam(':login',$login);
		if ( ! $checkUser->execute() ) {
			return $this->logout('Bad Login');
		}
		
		$result = $checkUser->fetch();
		$RightPass = $result['Password'];
		if ( ! validate_password($pass,$RightPass) ) {
			return $this->logout('Bad Login');
		}
		
		$this->UID = $result['UID'];
		$this->LoginName = $login;
		$this->DisplayName = $result['LoginName'];
		$this->LoggedIn = True;
		
		return 'Logged in';
	}
	
	/** @return string indicating success ('Updated') or failure ('Failed') */
	public function updateLastActive()	{
		global $dbUserAccess;
		
		$date = new DateTime;
		$raw_date = $date->format("Y-m-d\TH:i:sO");
		
		$lastActive = $dbUserAccess->prepare("UPDATE users SET LastLogin = :active WHERE UID = :UID");
		
		$lastActive->bindParam(':active', $raw_date);
		
		$lastActive->bindParam(':UID', $this->UID);
		
		if ( ! $lastActive->execute()) {
			return 'Failure';
		}
		return 'Updated';
	}
	
	/** @param string $name The name the user wishes to check availability of
	* @return bool true = name is free or error; false = name is taken */
	public function nameAvailable($name) {
		global $dbUserAccess;
	
		$check = $dbUserAccess->prepare("SELECT COUNT(*) FROM Logins WHERE LoginName = :name");
		$check->bindParam(':name',$name);
	
		if ( ! $check->execute() || $check->fetchColumn() == 0 ) {
			return true; 
			// returning true if 0 results are returned, or there is an error
		}
		return false; 
		// returning false if more than 0 results
	}
	
	/** @param string $login The user's desired login name
	* @param string $pass The password (plaintext) supplied by the user
	* @return string An error message for delivery to the users, or 'Logged in' if login was successful */
	public function register($login,$pass) {
		global $dbUserAccess;
		if ( ! $this->nameAvailable($login) ) {
			return $this->logout("Bad Login");
		}
		$this->LoginName = $login;
		$this->Password = create_hash($pass);
		
		$registration = $dbUserAccess->prepare("INSERT INTO users (LoginName, Password) VALUES (:login, :pass)");
		
		$registration->bindParam(':login',$this->LoginName);
		
		$registration->bindParam(':pass',$this->Password);
		
		if( $registration->execute() ) {
			return 'Success';
		}
		return 'Failed to execute';
	}
}