<?php 
 
 //importing dbDetails file 
require_once 'C:\xampp\htdocs\capture_it\database\dbconfig.php';

$_fname= $_POST['fname'];
$_lname= $_POST['lname'];
$_email= $_POST['email'];
$_pass= $_POST['pass'];
$_pincode= $_POST['pincode'];
$_city= $_POST['city'];
$_mno= $_POST['mno'];
 
$_query = mysqli_query($con, "INSERT INTO `client`(`c_fname`, `c_lname`, `c_email`, `c_pass`, `c_pincode`,`c_city`,`c_mno`) VALUES ('$_fname','$_lname','$_email', '$_pass','$_pincode','$_city','$_mno')");


?>