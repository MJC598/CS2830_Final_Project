<?php
    
	// http://us3.php.net/manual/en/function.session-start.php
	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
	
	
	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: index.html");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_create') {
		create_user();
	} else {
		login_form();
	}
	
	function create_user() {
		$firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
		$lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
        $email = empty($_POST['email']) ? '' : $_POST['email'];
        
        if(strcmp($password, $confirmPass) == 0){
           // Require the credentials
            require_once 'db.conf';

            $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            
            if(!$con){
                $error = "Error connecting: " . mysqli_connect_error();
                require('createUser_form.php');
                exit;
            }
            mysqli_close($con);
            require_once 'db.conf';
            
            // Connect to the database
            $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

            // http://php.net/manual/en/mysqli.real-escape-string.php
            $username = $mysqli->real_escape_string($username);
            $password = $mysqli->real_escape_string($password);
            $email = $mysqli->real_escape_string($email);
            $firstName = $mysqli->real_escape_string($firstName);
            $lastName = $mysqli->real_escape_string($lastName);
            
            $password = sha1($password);

            // Build query
            $query = "INSERT INTO users(username, password, firstName, lastName, email, addDate) VALUES('$username', '$password', '$firstName', '$lastName', '$email', now());";

//            // Run the query
//            $mysqliResult = $mysqli->query($query);
//
//            // If there was a result...
            if ($mysqli->query($query) == true) {                
                // Close the results
                // Close the DB connection
                mysqli_close($mysqli);
                
                $error = "New User Created Successfully!";
                // How many records were returned?
//                $match = $mysqliResult->num_rows;
                require "login_form.php";
                exit;
            }
            else{
                $error = "Error: " . $mysqli->error;
                require "createUser_form.php";
                exit;
            }
        } 
        else {
          $error = 'Error: Passwords do not match';
          require "createUser_form.php";
          exit;
        }
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
        exit;
	}
	
?>