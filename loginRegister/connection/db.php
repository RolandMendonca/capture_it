<?php
$server="localhost";
$user="root";
$pass="";
$db="findmyjob";
$con = mysqli_connect($server,$user,$pass,$db);
if(!$con)
{
 echo "error in connection" .mysqli_error($con);
}

?>