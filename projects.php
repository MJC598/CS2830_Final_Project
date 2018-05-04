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
        <script src="projects.js"></script>
    <?php 
        print $menuHTML;
    ?>
    <div class="projects">
        <span class="title">Computer Science:</span><br />
        <nav id="project-list">
            <button type="button" id="calc" onclick="getData('calc')">Calculator</button>
            <button type="button" id="scraper" onclick="getData('scraper')">Web Scraper</button>
            <button type="button" id="cards" onclick="getData('cards')">Flashcards</button>
            <button type="button" id="data-structs" onclick="getData('data')">Data Structures</button>
        </nav>
        <div id="description">
            I started working on this for my Java OOP development class at Mizzou. The idea was to create a conversion calculator for my chemical engineering friends to make their lives easier. I still need to go back and refactor the project and make a couple adjustments before I give it to them, but this is how I turned it in for the grade in the class.
        </div>
        <a id="project-holder" href="https://github.com/MJC598/OOP-Design/tree/master/Final_Project">click me to go to the github repo</a><br /><br />
        <span class="title">Service:</span><br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ju8yvIkrdB4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    </body>
</html>