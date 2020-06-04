<?php

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'template.php':
        $title = "template for goodsbooks";
        $PageID = 'This is a template!';
    break;    

    case 'index.php':
        $title = "goodsbooks";
        $PageID = 'Welcome to goodsbooks';
    break;
        
    case 'about.php':
        $title = "About goodsbooks";
        $PageID = 'About goodsbooks';
    break;
        
    case 'bookmark.php':
        $title = "Product-bookmark";
        $PageID = 'Bookmark';
    break;
        
    case 'bookstand.php':
        $title = "Product-bookstand";
        $PageID = 'Book Stand';
    break;
        
    case 'booklamp.php':
        $title = "Product-booklamp";
        $PageID = 'Book Lamp';
    break;
        
    case 'senior.php':
        $title = "Product-senior";
        $PageID = 'For Our Senior Customers';
    break;
    
    case 'others.php':
        $title = "Product-others";
        $PageID = 'Others';
    break;
        
    case 'productdetail.php':
        $title = "Product-detail";
        $PageID = 'Product Detail';
    break;
    
    case 'recommendation.php':
        $title = "Books List";
        $PageID = 'Check our recommendation books list';
    break;
    
    case 'reviews.php':
        $title = "Review page";
        $PageID = 'Reviews';
    break;
        
    case 'contact.php':
        $title = "Contact Us";
        $PageID = 'Contact Us';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
   }

?>
