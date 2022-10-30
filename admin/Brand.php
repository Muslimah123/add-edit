<?php
include("../settings/core.php");
include("../controllers/product_controller.php");
 //check_login();
 //$adminchecking= check_user_role();
 //if($adminchecking == 1){
 //    echo "Welcome to the admin page";
 //}else{
  //  echo "you are not allowed to access this page";
  //  header("location: ./login/login.php");
 //}
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
    <h1> Adding new brands</h1>
    <form action="../actions/add_brand.php" method= "POST">
            <input type="text"name="brand_name" placeholder="brand name" required>
            <br>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <table id=brands>
            <thead>
                <tr>
                    <th> B-ID</th>
                    <th> Brands</th>
                    <th> Update/Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php


                    $brand_list=get_all_brand_ctr();
                    //print_r($brand_list);
                    foreach ($brand_list as $abrand) {
                        $brandid=$abrand['brand_id'];
                        $brandname=$abrand['brand_name'];

                        echo"
                            <tr>;
                                <td>$brandid</td>
                                <td>$brandname</td>
                                <td>
                                    <a class='btn btn-primary btn sm' href='editingform.php?b=$brandid'>Update</a>
                                    <a class='btn btn-primary btn sm' href=''>Delete</a>
                                </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>


