<?php

//    if ($_SERVER['HTTPS'] !== 'on') {
//		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//		header("Location: $redirectURL");
//		exit;
//	}
//	
//	// http://us3.php.net/manual/en/function.session-start.php
//	if(!session_start()) {
//		// If the session couldn't start, present an error
//		header("Location: error.php");
//		exit;
//	}

    $email = "mjc6r9@mail.missouri.edu";
    
    $msg = $_POST['message'];
    $msg = str_replace("\n.", "\n..", $msg);
    $subject = $_POST['subject'];
//    $query = "SELECT email FROM users WHERE id=" . $_SESSION['id'];
//    
//    require_once('db.conf');
//    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//        
//    // Check for errors
//    if ($mysqli->connect_error) {
//        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
//		require "contact.php";
//        exit;
//    }
//
//    $mysqliResult = $mysqli->query($query);
//    $val = $mysqliResult;
//    $mysqliResult->close();
//    $mysqli->close();
//        
//    $from = "From: " . $val;

    mail($email, $subject, $msg);
    $error = "Message sent";
    require "contact.php";
    exit;
?>