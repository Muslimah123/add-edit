<?php
//connect to database class
require("../settings/db_class.php");


class product_class extends db_connection
{
	//--INSERT--//
	public function insert_brand_clas($brand_name){

		$sql = "INSERT INTO `brands`(`brand_name`) 
			VALUES ('$brand_name')";
		return $this->db_query($sql);
    }

    //-SELECT--//
    public function get_all_brand_cls(){
		$sql = "SELECT * FROM brands"; 
		return $this->db_fetch_all($sql);
	}

	public function get_one_brand_cls($brandid){
		$sql = "SELECT * FROM brands where brand_id='$brandid'"; 
		return $this->db_fetch_one($sql);
	}
    

//--UPDATE--//
public function update_brand_cls($update,$brand_id,){
	$sql = "UPDATE brands set brand_id = '$brand_id', brand_name = '$update' where brand_id = '$brand_id'"; 
	return $this->db_query($sql);

}
}
?>