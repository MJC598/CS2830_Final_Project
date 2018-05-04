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
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
    require_once('nav.php');
    // Specify the currently selected tab
    $currentPage = 'Contact Me';

    // Create a new MenuComponent object (pass it the menu items and the currently selected one)
    $menu = new MenuComponent($menuItems, $currentPage, 'menu.tmpl');
    // Call MenuComponent's 'generate()' method
    $result = $menu->generate();
    $menuHTML = $result['html'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Contact Me</title>
        <link rel="stylesheet" type="text/css" href="login.css" />
    <?php 
        print $menuHTML;
    ?>
    <div class="stuff">
        <p id="pretext">
            Please, feel free to email me any inquiries whether about the website or side projects!
        </p>
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        <form action="email.php" method="post" class="words">
            <div class="container">
                <label for="subject">Subject: </label><br />
                <input type="text" name="subject"><br />

                <label class="message-tag">Message: </label><br />
                <textarea id="message" value="message"></textarea><br />

                <input type="submit" value="send">
            </div>
        </form>
    </div>
    </body>
</html>