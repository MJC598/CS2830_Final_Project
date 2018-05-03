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
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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
    <?php
        if ($error) {
            print "<div class=\"message\">$error</div>\n";
        }
    ?>
    <form name="mattsForm" action="createUser.php" method="POST" >
        <input type="hidden" name="action" value="do_create" />
    
        <div class="item">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            </div>
        <div class="item">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        <div class="item">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="item">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="item">
            <label for="confirmPass">Confirm Password:</label>
            <input type="password" id="confirmPass" name="confirmPass" required>
        </div>
        <div class="item">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" ng-model="text" required>
        </div>
        <div class="item">
            <input type="submit" value="Submit">
        </div>
    </form>
    </div>
    </body>
</html>