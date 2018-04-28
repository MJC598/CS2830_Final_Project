<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <script src="jslibs/jquery3-3-1.js"></script>
        <script src="jslibs/angular1-6-9.js"></script>
        <script src="website.js"></script>
        <script src="myApp.js"></script>
        <script src="myController.js"></script>
        <script src="jslibs/jquery-ui.min.js"></script>
        <script>
            $(function(){
                $("input[type=submit]").button();
            });
        </script>
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="website.css" />
        <link rel="stylesheet" type="text/css" href="jslibs/jquery-ui.min.css" />
    </head>
    <body class="home">
        <div class="header wrapper">
            <div class="header-left">Matthew Carroll</div>
            <div class="header-right">
                <nav class="nav-bar">
<!--                    <div>Matthew Carroll</div>-->
                    <a id="item1" class="nav-bar" href="index.html">Home</a>
                    <a id="item2" class="nav-bar" href="contact.html">Contact</a>
                    <a id="item3" class="nav-bar" href="resume.html">Resume</a>
                    <a id="item4" class="nav-bar" href="projects.html">Projects</a>
                    <a id="item5" class="nav-bar" href="login.html">Login</a>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
            <div class="content">
            <?php
                if ($error) {
                    print "<div class=\"ui-state-error\">$error</div>\n";
                }
            ?>
                <form action="login.php" method="post">
                    <input type="hidden" name="action" value="do_login">
                    
                    <div class="stack">
                        <label for="username">User name:</label>
                        <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
                    </div>
                    <div class="stack">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
                    </div>
            
                    <div class="stack">
                        <input type="submit" value="Submit">
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