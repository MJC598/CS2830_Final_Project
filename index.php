<?php
require_once('nav.php');
// Specify the currently selected tab
$currentPage = 'Home';

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
<title>Matthew Carroll</title>
<?php 
    print $menuHTML;
?>
    <p class="words">
        <b>Welcome to my Webpage!</b>
    </p><br />
    <p class="words" id="HFquote">
        "Whether you think you can, <br> or think you can't--you're right".<br>- Henry Ford
    </p>
</body>
</html>
