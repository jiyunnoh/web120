<?php include "includes/header.php"?>   

<?php
    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "ianjy1127@gmail.com";  
    $toName = "Jiyun";
    $website = "BIG website";
    echo loadContact('multiple.php'); #demonstrates multiple form elements

?>
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3>Want some new books to read?</h3>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
<p><a href="recommendation.php">Go to see the recommendations</a></p>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?> 