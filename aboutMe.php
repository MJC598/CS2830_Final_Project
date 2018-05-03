<?php
require_once('nav.php');


//require_once('slider.php');


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
<title>Matthew Carroll</title>
<link rel="stylesheet" href="imageSlider.css" type="text/css" />
<script src="imageSlider.js"></script>
<?php 
//    print $menuHTML;
?>
        <div class="slideshow-container">
            <?php
//                print $sliderHTML;
            ?>  
            <div class="mySlides fade">
                <img class="image" src="pictures/doggo.jpg" />
                <div class="indicator">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <div class="mySlides fade">
                <img class="image" src="pictures/Jesse.jpg" />
                <div class="indicator">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <div class="mySlides fade">
                <img class="image" src="pictures/tickets.jpg" />
                <div class="indicator">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            
<!--            Arrows-->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div>
            <p id="image-special-content"></p>
        </div>
    </body>
</html>