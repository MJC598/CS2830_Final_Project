<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Projects</title>
        <script src="jslibs/jquery3-3-1.js"></script>
        <script src="jslibs/angular1-6-9.js"></script>
        <script src="website.js"></script>
        <script src="myApp.js"></script>
        <script src="myController.js"></script>
<!--        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="website.css" />
    </head>
    <body class="home">
        <div class="header wrapper">
            <div class="header-left">Matthew Carroll</div>
            <div class="header-right">
                <nav class="nav-bar">
<!--                    <div>Matthew Carroll</div>-->
                    <a id="item1" class="nav-bar" href="index.html">Home</a>
                    <a id="item2" class="nav-bar" href="aboutMe.html">About Me</a>
                    <a id="item3" class="nav-bar" href="resume.html">Resume</a>
                    <a id="item4" class="nav-bar" href="projects.html">Projects</a>
                    <a id="item5" class="nav-bar" href="login.php">Contact Me</a>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
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
<!--
    <footer class="footer">
        <p>Copyright (c) 2018</p>
    </footer>
-->
    </body>
</html>