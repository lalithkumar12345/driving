<?php
include 'regdatabase.php';
if(isset($_POST['submit']))
{
$name=$_POST['uname'];

$courses=$_POST['courses'];

$gender=$_POST['gender'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];


$sql="insert into reg(
name,courses,gender,phone,password,email,address) values('$name','$courses','$gender','$phone','$password','$email','$address')";
if(mysqli_query($con,$sql))
{
echo "<script>alert('inserted a record Your data has been registered succesfully')</script>";
}
else
{
 echo "error".mysqli_error($con);
}
mysqli_close($con);
}
?>