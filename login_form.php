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
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script>
            $(function(){
                $("input[type=submit]").button();
            });
        </script>
    <?php 
        print $menuHTML;
    ?>
    <div class="content">
    <?php
        if ($error) {
            print "<div class=\"ui-state-error\">$error</div>\n";
        }
    ?>
    <form action="login.php" method="post">
        <input type="hidden" name="action" value="do_login">
        <div class="stack">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
        </div>
        <div class="stack">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
        </div>
        <div class="stack">
            <input type="submit" value="Submit">
        </div>
        <div class="stack">
            <a id="create-user-link" href="createUser_form.php">Not a user?</a>
        </div>
    </form>
    </div>
    </body>
</html>