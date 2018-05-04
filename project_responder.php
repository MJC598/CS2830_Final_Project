<?php
    
    $query = empty($_GET['info']) ? 'calc' : $_GET['info'];

    switch($query){
        case 'calc':
            $item = array("link" => "https://github.com/MJC598/OOP-Design/tree/master/Final_Project", "description" => "I started working on this for my Java OOP development class at Mizzou. The idea was to create a conversion calculator for my chemical engineering friends to make their lives easier. I still need to go back and refactor the project and make a couple adjustments before I give it to them, but this is how I turned it in for the grade in the class.");
            break;
//            $data = "I started working on this for my Java OOP development class at Mizzou. The idea was to create a conversion calculator for my chemical engineering friends to make their lives easier. I still need to go back and refactor the project and make a couple adjustments before I give it to them, but this is how I turned it in for the grade in the class.";
//            break;
        
        case 'scraper':
            $item = array("link" => "https://github.com/MJC598/Python/blob/master/WebScrapper/webScrapping.py", "description" => "This is a work in progress, but is one of the projects I'm most excited about. I started this in the middle of March 2018 and have really enjoyed spending time on it and figuring out how to pull data from webpages. Unfortunately my time has been limited due to school work but I hope to get back to it over the summer.");
            break;
//            $data = "This is a work in progress, but is one of the projects I'm most excited about. I started this in the middle of March 2018 and have really enjoyed spending time on it and figuring out how to pull data from webpages. Unfortunately my time has been limited due to school work but I hope to get back to it over the summer.";
//            break;
        
        case 'sensors':
            $item = array("link" => "https://github.com/smheffron/FlashcardsPro", "description" => "One of my more entertaining projects involved working with mechanical engineers to build and launch a space balloon to collect information on upper level atmospheric gasses. I worked with sensors such as an MQ4, MQ131, and MQ135 and saved it to an SD card through an Arduino. Pretty simple, but I really enjoyed the change of pace");
            break;
//            $data = "This is my team's group project for our database class. It is composed of an android app and website. I primarily worked with the website team and general documentation for the entire project. It was really cool to see a team come together and produce something we all can be proud of.";
//            break;
        
        case 'data':
            $item = array("link" => "https://github.com/MJC598/Advanced-Algorithm-Design", "description" => "Algorithms are incredibly interesting and are the foundation for Computer Science. This page is my homework for my algorithms design III class and includes things like graph traversal algorithms and more complicated sorts.");
            break;
//            $data = "Algorithms are incredibly interesting and are the foundation for Computer Science. This page is my homework for my algorithms design III class and includes things like graph traversal algorithms and more complicated sorts.";
//            break;
            
        default:
            $item = array("link" => "https://github.com/MJC598/OOP-Design/tree/master/Final_Project", "description" => "I started working on this for my Java OOP development class at Mizzou. The idea was to create a conversion calculator for my chemical engineering friends to make their lives easier. I still need to go back and refactor the project and make a couple adjustments before I give it to them, but this is how I turned it in for the grade in the class.");
            break;
//            $data = "I started working on this for my Java OOP development class at Mizzou. The idea was to create a conversion calculator for my chemical engineering friends to make their lives easier. I still need to go back and refactor the project and make a couple adjustments before I give it to them, but this is how I turned it in for the grade in the class.";
//            break;
    }

    print json_encode($item);

?>