<?php
require_once('pbkdf2.class.php');
/**
 * Class User 
 */
class User {
    /** @var int  Contains the UID of the User (from the db) */
    public $UID;
    
    /** @var string  Contains the User's login name  */
    protected $LoginName;
    
    /** @var  string  Contains the user's password (as supplied)
     * parsed by pbkdf2 */
    protected $Password;
    
    /** @var  string  Contains the User's timezone in Region/City format */
    public $TimeZone;
    
    /** @var  mixed  Contains the User's timezone in Region/City format (as a DateTimeZone object) */
    public $TimeZoneOffset;
    
    /** @var  bool  is the user logged in? */
    public $LoggedIn;

    /** @param string $reason The reason for the logout
     * @return string Display string for the User */
    public function logout($reason)	{
        $this->UID = "";
        $this->LoginName = "";
        $this->TimeZone = "";
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
        global $pw;

        $checkUser = $pw->prepare("SELECT UID, Password, TimeZone, CharUID FROM Logins WHERE LoginName = :login");
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
        $this->TimeZone = $result['TimeZone'];
        $tzo = new DateTimeZone($this->TimeZone);
        $time = new DateTime('now');
        $this->TimeZoneOffset = $tzo->getOffset($time);
        $this->LoginName = $login;
        $this->Character = $result['CharUID'];
        $this->LoggedIn = True;
        return 'Logged in';
    }

    /** @param mixed $connection A PDO connection that has UPDATE access to Logins table
     * @param mixed $raw_date the current Time/Date stamp in UTC as a string (updating to a datetime object soon)
     * @return string indicating success ('Updated') or failure ('Failed') */
    public function updateLastActive($connection,$raw_date)	{

        $lastActive = $connection->prepare("UPDATE Logins SET LastLogin = :active WHERE UID = :UID");

        $lastActive->bindParam(':active', $raw_date);

        $lastActive->bindParam(':UID', $this->UID);

        if ($lastActive->execute()) {
            return 'Failure';
        }
        return 'Updated';
    }

    /** @param string $name The name the user wishes to check availability of
     * @return bool true = name is free or error; false = name is taken */
    public function nameAvailable($name) {
        global $con;

        $check = $con->prepare("SELECT COUNT(*) FROM Logins WHERE LoginName = :name");
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
        global $pw;
        if ( ! $this->nameAvailable($login) ) {
            return $this->logout("Bad Login");
        }
        $this->LoginName = $login;
        $this->Password = create_hash($pass);

        $registration = $pw->prepare("INSERT INTO Logins (LoginName, Password) VALUES (:login, :pass)");

        $registration->bindParam(':login',$this->LoginName);

        $registration->bindParam(':pass',$this->Password);

        if( $registration->execute() ) {
            return 'Success';
        }
        return 'Failed to execute';
    }
}