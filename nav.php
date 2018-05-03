<?php

// HTTPS redirect
if ($_SERVER['HTTPS'] !== 'on') {
	$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header("Location: $redirectURL");
	exit;
}

// Every time we want to access $_SESSION, we have to call session_start()
if(!session_start()) {
	header("Location: error.php");
	exit;
}

$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];


// Require the MenuComponent class
require_once("Menu.php");

// Create an array of menu items and their links
$menuItems = array();
$menuItems[] = array('label' => 'Home', 'link' => 'index.php');
$menuItems[] = array('label' => 'About Me', 'link' => 'aboutMe.php');
$menuItems[] = array('label' => 'Projects', 'link' => 'projects.php');
$menuItems[] = array('label' => 'Contact Me', 'link' => 'contact.php');

//dynamically change login/logout tab based on login status
if(!$loggedIn){
    $menuItems[] = array('label' => 'Login', 'link' => 'login_form.php');
}
else{
    $menuItems[] = array('label' => 'Logout', 'link' =>'logout.php');
}
?>