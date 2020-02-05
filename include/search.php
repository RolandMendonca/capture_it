<?php 
 
 //importing dbDetails file 
require_once './database/dbconfig.php';

$_category = $_POST['categoory'];
$_location = $_POST['location'];

$query = mysqli_query($con, "select FROM `admin` WHERE a_city='$_location';");

echo $query;
?>