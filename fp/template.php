<?php include 'includes/config.php'?>
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
  <h1><a href="template.php"><img class="logo" src="images/goodsbooks.png" alt="goodsbooks's logo"></a></h1>
    <div class="iconbox">
    <div class="icon">
        <a href=""><i class="fa fa-fw fa-user fa-2x"></i></a>
<!--        <span>Sign In</span>-->
    </div>
    <div class="icon">
        <a href=""><i class="fa fa-fw fa-shopping-cart fa-2x"></i></a>
<!--        <span>Sign In</span>-->
    </div>
    </div>
  <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span>WEB120</span></a></li>
     <li><a href=""><span>Home</span></a></li>
     <li><a href=""><span>About</span></a></li>
     <li><a href="#"><span>Product <i class="fa fa-fw fa-chevron-down"></i></span></a>
        <ul>
           <li><a href=""><span>Bookmark</span></a></li>
           <li><a href=""><span>Book Stand</span></a></li>
           <li><a href=""><span>Book Lamp</span></a></li>
           <li><a href=""><span>Senior</span></a></li>
           <li><a href=""><span>Others</span></a></li>
        </ul>
     </li>
    <li><a href="#"><span>Community <i class="fa fa-fw fa-chevron-down"></i></span></a>
        <ul>
           <li><a href=""><span>Recommendation</span></a></li>
           <li><a href=""><span>Reviews</span></a></li>
        </ul>
     </li>
     <li><a href=""><span>Contact</span></a></li>
  </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<div class="">
<section>
 <h2 class="pageID"><?=$PageID?></h2>
<!--header include ends here-->  

<div class="blueberry">
  <ul class="slides">
    <li><img src="https://via.placeholder.com/820x520" alt="bookmark" /></li>
    <li><img src="https://via.placeholder.com/820x520" alt="bookstand" /></li>
    <li><img src="https://via.placeholder.com/820x520" alt="booklamp" /></li>
  </ul>
</div>

<div class="w-50"><a href="others.php">
    <img src="https://via.placeholder.com/380" alt="pad" />
    <div class="more">
        <p>Best Seller</p>
    </div></a>
</div>
<div class="w-50"><a href="others.php">
    <img src="https://via.placeholder.com/380" alt="bookend" />
    <div class="more">
        <p>New Arrival</p>
    </div></a>
</div>
<div class="w-50"><a href="others.php">
    <img src="https://via.placeholder.com/380" alt="mug cup" />
    <div class="more">
        <p>Event</p>
    </div></a>
</div>
<div class="w-50"><a href="others.php">
    <img src="https://via.placeholder.com/380" alt="pouch" />
    <div class="more">
        <p>Sale</p>
    </div></a>
</div>
</section>
<!-- END LEFT COL -->

<aside>
<h3>h3 aside</h3>   
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    
</aside>

</div>
<!--footer include starts here-->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019 - <?=date('Y')?> by <a href="../contactme.php" target="_blank">Jiyun Noh</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</div>
<!-- END WRAPPER --> 

</body>
</html>
<!--footer include ends here-->