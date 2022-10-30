
<?php
include("../classes/product_class.php");

//--INSERT--//

function insert_brand_ctr($brand_name){
    //create an instance of the class
    $insert_brand = new product_class();
    
    //connection to the class/returning the method in the customer
    return $insert_brand->insert_brand_clas($brand_name);
  }
  
  //--SELECT--//
  function get_all_brand_ctr(){
    $brand_list= new product_class();
    return $brand_list->get_all_brand_cls();
  }

  function get_one_brand_ctr($brandid){
    $o_brand= new product_class();
    return $o_brand->get_one_brand_cls($brandid);
  }
  //--UPDATE--//
  function update_brand_ctr($update, $brand_id){
    $b_update= new product_class();
    return $b_update->update_brand_cls($update, $brand_id);
  }
?>