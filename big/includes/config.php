<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples by Jiyun Noh";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-cube'; 
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Galleries and Sliders";
        $logo = 'fa-camera-retro';
        $PageID = 'Galleries and Sliders';
    break;
        
    case 'map.php':
        $title = "Google Map";
        $logo = 'fa-map-o'; 
        $PageID = 'Google Map';
    break;
        
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar';
        $PageID = 'Google Calendar';
    break;
        
    case 'youtube.php':
        $title = "Google YouTube Video";
        $logo = 'fa-youtube-square'; 
        $PageID = 'Google YouTube Video';
    break;
    
    case 'shoppingcarts.php':
        $title = "Shopping Carts Research";
        $logo = 'fa-shopping-basket';
        $PageID = 'Shopping Carts Research';
    break;
    
    case 'siteapp.php':
        $title = "Responsive Site vs Native App";
        $logo = 'fa-html5';
        $PageID = 'Responsive Site vs Native App';
    break;
    
    case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = 'fa-eye';
        $PageID = 'Live Web Cameras';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
   }

?>
