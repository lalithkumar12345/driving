<?php
$servername="localhost";
$username="root";
$password="";
$database="miniprojeect";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
die("error".mysqli_error($con));
}
else
{
echo "<script> alert('connected Thank you for contacting us')</script>";
}
?>