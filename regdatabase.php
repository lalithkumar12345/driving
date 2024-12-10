<?php
$servername="localhost";
$username="root";
$password="";
$database="regdatabase";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
die("error".mysqli_error($con));
}
else
{
echo "<script> alert('connected and Thank you for the registration We will contact u very soon!')</script>";
}
?>