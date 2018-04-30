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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Contact Me</title>
        <script src="jslibs/jquery3-3-1.js"></script>
        <script src="jslibs/angular1-6-9.js"></script>
        <script src="website.js"></script>
        <script src="myApp.js"></script>
        <script src="myController.js"></script>
<!--        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="website.css" />
    </head>
    <body class="home">
        <div class="header wrapper">
            <div class="header-left">Matthew Carroll</div>
            <div class="header-right">
                <nav class="nav-bar">
<!--                    <div>Matthew Carroll</div>-->
                    <a id="item1" class="nav-bar" href="index.html">Home</a>
                    <a id="item2" class="nav-bar" href="aboutMe.html">About Me</a>
                    <a id="item3" class="nav-bar" href="resume.html">Resume</a>
                    <a id="item4" class="nav-bar" href="projects.html">Projects</a>
                    <a id="item5" class="nav-bar" href="logout.php">Logout</a>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
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
                    <div class="subject-div">
                        <label for="subject">Subject: </label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    <div class="message-div">
                        <label class="message-tag">Message: </label>
                        <textarea id="message" value="message"></textarea>
                        <div class="clear"></div>
                    </div>
                    <div class="submit-div">
                        <input type="submit" value="send">
                    </div>
                </form>
            </div>
<!--
    <footer class="footer">
        <p>Copyright (c) 2018</p>
    </footer>
-->
    </body>
</html>