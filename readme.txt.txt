PHP -> Gamify Application version 1.0.1
***********************************************************

i: Database connection can be set from /include/db.php

ii: Site configuration can be ste from /include/config.php

iii: Core bll, events and entity files located /include/bll, /include/entity, /include/events folder

iv: Php files to communicate between angular js and core bll files include at /api directory

v: Core front end application included at /app directory

vi: Badges to be stored in /contents directory. please give write permission to contents directory inorder to save images properly

v: Default image used for badges located at /images directory

vi: Application used in manage.html, simulate.html and display.html, you can adjust it on any section or page of your application. but make sure you should adjust the following lines of code in /app/js/manage.js, simulate.js, display.js if you put application in sub folders.

var templatePath = "app/templates/";
var apiPath = "api/";
var defaultimagePath = "images/badge.png";
var imagedirectoryPath = "contents/badges/";

if you put application inside directory e.g /manage/index.php then above lines in manage.js file should be like this

var templatePath = "../app/templates/";
var apiPath = "../api/";
var defaultimagePath = "../images/badge.png";
var imagedirectoryPath = "../contents/badges/";

Also replace manage.js script with manage.dev.js script as manage.js script has been minified for live protection.

*********************************************

Ver 1.0.4
*********************************************
Fix few bugs in core engine bll file

Rest if you face problem or share feedbacks you can use our email support@mediasoftpro.com



