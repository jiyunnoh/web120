<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">

<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/grid.css" />
<link rel="stylesheet" href="css/blueberry.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />  
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caladea:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.blueberry.js"></script>
<script src="js/script.js"></script>
    
<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>

</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><img class="logo" src="images/goodsbooks.png" alt="goodsbooks's logo"  tabindex="0"></a></h1>
    <div class="icon" tabindex="0">
        <a href=""><i class="fa fa-fw fa-user fa-2x"></i></a>
<!--        <span>Sign In</span>-->
    </div>
    <div class="icon" tabindex="0">
        <a href=""><i class="fa fa-fw fa-shopping-cart fa-2x"></i></a>
<!--        <span>Sign In</span>-->
    </div>
  <nav id="cssmenu">
  <ul>
     <li tabindex="0"><a href="../index.php"><span>WEB120</span></a></li>
     <li tabindex="0"><a href="index.php"><span>Home</span></a></li>
     <li tabindex="0"><a href="about.php"><span>About</span></a></li>
     <li tabindex="0"><a href="#"><span>Product <i class="fa fa-fw fa-chevron-down"></i></span></a>
        <ul>
           <li tabindex="0"><a href="bookmark.php"><span>Bookmark</span></a></li>
           <li tabindex="0"><a href="bookstand.php"><span>Book Stand</span></a></li>
           <li><a href="booklamp.php"><span>Book Lamp</span></a></li>
           <li><a href="senior.php"><span>Senior</span></a></li>
           <li><a href="others.php"><span>Others</span></a></li>
        </ul>
     </li>
    <li tabindex="0"><a href="#"><span>Community <i class="fa fa-fw fa-chevron-down"></i></span></a>
        <ul>
           <li><a href="recommendation.php"><span>Recommendation</span></a></li>
           <li><a href="reviews.php"><span>Reviews</span></a></li>
        </ul>
     </li>
     <li tabindex="0"><a href="contact.php"><span>Contact</span></a></li>
  </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<div class="">
<section>
 <h2 class="pageID"><?=$PageID?></h2>
<!--header include ends here--> 