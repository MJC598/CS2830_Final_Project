<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Welcome</title>
        <script src="jslibs/jquery3-3-1.js"></script>
        <script src="jslibs/angular1-6-9.js"></script>
        <script src="website.js"></script>
<!--        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="website.css" />
        <script>
        $(function(){
            $("input[type=submit]").button();	
            
            $("#password, #confirmPass").keyup(function(){
                var password = $("#password").val();
                var confirmPass = $("#confirmPass").val();
                
                if(password.localeCompare(confirmPass) != 0){
                    $("#outputDiv").html("Passwords Don't Match!");
                    document.getElementById("confirmPass").setCustomValidity("Passwords Don't Match!");
                }
                else{
                    $("#outputDiv").html("Passwords Match!");
                    document.getElementById("confirmPass").setCustomValidity("");
                }
            });
        
        });
    </script>
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
            <div class="stuff">
                <?php
                    if ($error) {
                        print "<div class=\"message\">$error</div>\n";
                    }
                ?>
                <form name="nicksForm" action="createUser.php" method="POST" >
                    <input type="hidden" name="action" value="do_create" />
                </form>
                
            </div>
<!--
    <footer class="footer">
        <p>Copyright (c) 2018</p>
    </footer>
-->
    </body>
</html>