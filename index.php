
<?php
include("settings/core.php");
//check_login_index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/brandtable.css">
	<title>Document</title>
</head>
<body>
	<!-- <button><a href= "login/register.php"> Register </a> </button><br><br>
	<button><a href= "login/logout.php"> Login </a> </button><br><br>
	<button><a href= "login/logout.php"> Logout </a> </button><br><br> -->
	<button><a href= "Admin/Brand.php"> Brand </a> </button><br><br>
	<script>document.getElementById("adding_brand").style.display='none'; </script>
</body>
</html>

<?php
if (isset($_SESSION['userRole'])){
	$admin=check_user_role();
		if($admin == 1){
			echo"<script>document.getElementById('adding_brand').style.display='block'; </script>";
	}
}
?>