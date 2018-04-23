<?php
    //adapted to fit my needs, exact same as the one in class structure wise
	
    if(!session_start()){
        header("Location: error.php");
        exit;
    }

    $loggedin = empty($_SESSION['loggedin']) ? '' : $_SESSION['username'];
    
    // If the user is logged in, redirect them home
    if ($loggedin) {
        header("Location: page1.php");
        exit;
    }
    
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
//			setcookie('username', $username);
            $_SESSION['loggedin'] = $username;
			header("Location: page1.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "login_form.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
	
	
?>
