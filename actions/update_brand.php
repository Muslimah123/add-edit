<?php
include("../controllers/product_controller.php");

	if(isset($_POST['submit'])){
    	$update = $_POST['update_brand_name'];
      $brand_id= $_POST['brand_id'];	

	$updating=update_brand_ctr($update,$brand_id);
	if($updating){
        echo "Successfully added";
    //redirects you to the login page
     header("Location: ../Admin/Brand.php");
        

    }
    else{
      echo "failed to add brand";
    }


  }
?>