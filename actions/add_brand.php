<?php
include("../controllers/product_controller.php");

	if(isset($_POST['submit'])){
    	$brand_name = $_POST['brand_name'];		

	$adding=insert_brand_ctr($brand_name);
	if($adding){
        echo "Successfully added";
    //redirects you to the login page
     header("Location: ../Admin/Brand.php");  

    }
    else{
      echo "failed to add brand";
      exit();
    }


  }
?>