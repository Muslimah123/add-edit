<?php
// landing/index page
include("../controllers/customer_controller.php");

if (isset($_POST['submit'])) {
  $tm = md5(time()); //Hashing to make an image unique

  $name = $_POST['customer_name'];
  $email = $_POST['customer_email'];
  $password = $_POST['customer_pass'];
  $country = $_POST['customer_country'];
  $city = $_POST['customer_city'];
  $contact = $_POST['customer_contact'];
  $user_role = 2;


  $image_name = $_FILES['image']['name'];
  $image_dst = "../images/customerImages/" . $tm . $image_name;

  $image_type = $_FILES['image']['type'];


  if (
    !empty($_FILES['image']['tmp_name'])
    && file_exists($_FILES['image']['tmp_name'])
  ) {
    $data = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $allowed = array("image/jpeg", "image/gif", "image/png", "image/jpg");

    if (!in_array($image_type, $allowed)) {
      //$error_message = 'Only jpg, gif, and png files are allowed.';
      header("Location: ../views/register.php?error=wrongImage");
      exit();
    } else {
      move_uploaded_file($_FILES['image']['tmp_name'], $image_dst);
    }

    $register = registerImg_ctr($name, $email, $password, $country, $city, $contact, $image_dst, $user_role);
  } else {
    $register = register_ctr($name, $email, $password, $country, $city, $contact, $user_role);
  }



  if ($register) {
    echo "You have sucessfully registered a new customer.";
    // now redirects to the login page
    header("Location: ../view/login.php");
  } else {
    echo "Your registration was unsuccessful";
    header("Location: ../view/register.php?error=registerFailed");
  }
}
