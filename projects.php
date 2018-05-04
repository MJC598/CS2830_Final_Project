<?php
require_once('nav.php');
// Specify the currently selected tab
$currentPage = 'Projects';

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
        <title>Projects</title>
    <?php 
        print $menuHTML;
    ?>
    <div class="stuff">
        <div id="holder">
            <nav id="project-list">
                <span id="calc" onclick="calculator()">Calculator</span>
                <span id="scraper" onclick="scraper()">Web Scraper</span>
                <span id="cards" onclick="flashcards()">Flashcards</span>
                <span id="data-structs" onclick="data()">Data Structures</span>
            </nav>
            <div id="description">
                My Java CS3330 Final Project was a Chemistry Conversion Calculator created so my roomates could make calculations quicker and waste less time trying to figure out simple conversions.
            </div>
        </div>
        <div id="project">
            <iframe width="100%" height="100%" src="https://github.com/MJC598/OOP-Design/tree/master/Final_Project" id="code"></object>
        </div>
    </div>
    </body>
</html>