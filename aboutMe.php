<?php
require_once('nav.php');
require_once('slider.php');


// Specify the currently selected tab
$currentPage = 'About Me';

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
<title>About Me</title>
<link rel="stylesheet" href="imageSlider.css" type="text/css" />

<?php 
    print $menuHTML;
    print $sliderHTML;
?>
    <br><br><br>
    <div class="picture-supertext">By the way, this is a picture of me.</div>
    <br><br>
    <img id="pic-of-me" src="pictures/me.jpg" alt="This is me" />
</body>
</html>