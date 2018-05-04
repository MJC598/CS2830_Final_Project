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
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css" />
        <script src="jslibs/jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="jslibs/jquery3-3-1.js"></script>
        <script>
            $(function(){
                $("input[type=submit]").button();
            });
        </script>
    <?php 
        print $menuHTML;
    ?>
    <div class="content">
        <form action="login.php" method="post">
            <input type="hidden" name="action" value="do_login">
            <div id="login-container">
            <?php
                if ($error) {
                    print "<div class=\"error\">$error</div>\n";
                }
            ?>
    
                <label for="username">Username:</label><br />
                <input type="text" placeholder="Enter Username" name="username" value="<?php print $username; ?>"><br />
            
                <label for="password">Password:</label><br />
                <input type="password" placeholder="Enter Password" name="password"><br />

                <input type="submit" value="Login"><br />
                <a id="new-user-link" href="createUser_form.php">Not a user?</a>
            </div>
        </form>
    </div>
    </body>
</html>