<?php include "includes/header.php";?>

<?php
    /*
     * Below are 2 different forms to be re-used       
     * 
     * Only use one at a time, comment out the other!       
     *
     */

    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "ianjy1127@gmail.com";  //place your/your client's email address here
    $toName = "Jiyun"; //place your client's name here
    $website = "WEB120 CONTACT FORM";  //place NAME of your client's website

    echo loadContact('simple.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>

</section>


 
<?php include "includes/footer.php";?>