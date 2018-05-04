# This is my final project for Comp_Sci 2830: Intro to Internet
----------------------------------------------------------------
### Server Info:
--------------------
#### LAMP stack AWS hosting
#### URL: http://ec2-18-219-231-108.us-east-2.compute.amazonaws.com/Final_Project/

### General Info:
--------------------
#### This is a standard personal website. It talks about who I am, what I have done from CS projects to service work, and provides a way to contact me after logging in. Feel free to play around as much as you want, the navbar is pretty straightforward so you don’t get lost. 

### Project Requirements:
---------------------------
1.	The 5 required tags are used on index.php 
    a.	```<!DOCTYPE html>``` (line 12)
    b.	```<html>```(line 13 and closes on line 27)
    c.	```<head>```(line 14 and closes in menu.tmpl)
    d.	```<title>```(line 16)
    e.	```<body>```(starts in menu.tmpl and closes on line 26)

2.	All landing pages (index.php, aboutMe.php, projects.php, contact.php, login_form.php, and createUser_form.php) are composed of a navbar template (menu.tmpl) forcing them to have consistent design.

3.	Things are split to where the webpage has minimal duplicate code thanks to menu.tmpl and slider.tmpl

4.	Before logging in, the pages that can be accessed are index.php, aboutMe.php, and projects.php. After logging in contact.php becomes accessible and the navbar changes so that the login says logout giving a visual cue to the user.

5.	Create user form is available in addition to the below username and password
    a.	Username: test
    b.	Password: pass

6.	PHP is all over the place, open any file with a .php extension and you will see PHP code.

7.	POST is used in login.php on lines 27, 36, and 37 corresponding to the form in login_form.php. GET is used in projects.js on line 2 to retrieve and AJAX request.

8.	The web app uses another form besides the login form to send an email to the site owner in contact.php.

9.	If a user enters incorrect information an error message is displayed over the appropriate section in login_form.php and createUser_form.php

10.	aboutMe.php has a picture slider and a picture of me meaning there are at least 2 videos on the page at all times 

11.	A YouTube video is on my projects page to represent my MAB trip (credits to my awesome site leader Elena Vo for making the video)

12.	JavaScript is used in all of imageSlider.js

13.	jQuery is used on lines 7 and 8 of imageSlider.js to select classes

14.	a .button() is used in the login_form.php on line 23

15.	AJAX is used to change projects in projects.js. The request is on line 2 but the entire written function is used to support the AJAX transition. 

16.	This is the start of my personal website, I really don’t want it to be trivial either

