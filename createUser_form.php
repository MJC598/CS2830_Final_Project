<?php
require_once('nav.php');
// Specify the currently selected tab
$currentPage = 'Login';

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
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="login.css" />
        <script src="jslibs/jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="jslibs/jquery3-3-1.js"></script>
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
    <?php 
        print $menuHTML;
    ?>
    <div class="stuff">
        <form name="mattsForm" action="createUser.php" method="POST" >
            <input type="hidden" name="action" value="do_create" />
            <div class="container">
            <?php
                if ($error) {
                    print "<div class=\"error\">$error</div>\n";
                }
            ?>
    
                <label for="firstName">First Name:</label><br />
                <input type="text" id="firstName" name="firstName" required><br />

                <label for="lastName">Last Name:</label><br />
                <input type="text" id="lastName" name="lastName" required><br />

                <label for="username">Username:</label><br />
                <input type="text" id="username" name="username" required><br />

                <label for="password">Password:</label><br />
                <input type="password" id="password" name="password" required><br />

                <label for="confirmPass">Confirm Password:</label><br />
                <input type="password" id="confirmPass" name="confirmPass" required><br />

                <label for="email">Email:</label><br />
                <input type="email" id="email" name="email" ng-model="text" required><br />

                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    </body>
</html>