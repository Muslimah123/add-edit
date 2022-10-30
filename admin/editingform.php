<?php
include("../controllers/product_controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/brandtable.css">
    <title>Brands</title>
</head>
<body>
    <h1> Updating brands <br>
            <br>
		<?php
		$gettingid= $_GET['b'];
		$brand=get_one_brand_ctr($gettingid);
		print_r($gettingid);
		?>
	</h1>
    <form action="../actions/update_brand.php" method= "POST">
			<label for="update_brand_name"> <b>Brand Name</b></label>
			<br>
            <br>		
            <input type="text"name="update_brand_name" value="<?php echo $brand['brand_name'];?>" required>
            <br>
            <br>
			<label for="brand_id"> <b>Brand ID</b></label>
			<br>
            <br>
			<input type="text"name="brand_id" value="<?php echo $brand['brand_id'];?>"  required>
            <br>
            <br>
            <input type="submit" name="submit" value="edit" >
        </form>
</body>
</html>
