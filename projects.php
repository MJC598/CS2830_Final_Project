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
        <span class="title">Computer Science:</span><br><br><br>
        <nav id="project-list">
            <button type="button" id="calc" onclick="getData('calc')">Calculator</button>
            <button type="button" id="scraper" onclick="getData('scraper')">Web Scraper</button>
            <button type="button" id="sensors" onclick="getData('sensors')">Sensors</button>
            <button type="button" id="data-structs" onclick="getData('data')">Data Structures</button>
        </nav><br><br><br>
        <div class="project-description" id="description">
            I started working on this for my Java OOP development class at Mizzou. The idea was to create a conversion calculator for my chemical engineering friends to make their lives easier. I still need to go back and refactor the project and make a couple adjustments before I give it to them, but this is how I turned it in for the grade in the class.
        </div><br><br>
        <a id="project-holder" href="https://github.com/MJC598/OOP-Design/tree/master/Final_Project">click me to go to the github repo</a><br><br><br>
        <span class="title">Service:</span><br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ju8yvIkrdB4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br><br>
        <div class="project-description">
            I've always loved doing service work and in addition to enjoying it, I grew up learning the importance of service. Early on I went to food pantries as a part of my church to feed the poor around Christmas, then in high school I had several different service projects. I worked with Special Olympics, Crisis Nursery, and Life Bridge to name a few sites. They were all amazing and I charish every memory I made with all of the people at each place. Now, in college, I've primarily done my service through our student led organization, Mizzou Alternative Breaks (MAB). I've gone on two trips and recently was chosen to lead a trip next year! The first trip involved working at FurKids Animal Shelter in Atlanta, Georgia with 12 other Mizzou students. We spent several days with both cats and dogs cleaning, feeding, walking, playing, and savoring every moment. The second trip was a weekend trip to Clinton County, Missouri. There we worked with the 4-H program as judges and painted a student rec center as shown in the video above. It was so much fun, I just wish I could go back! Service really means the world to me and I hope to take that with me wherever I land.
        </div><br><br>
    </div>
    </body>
</html>