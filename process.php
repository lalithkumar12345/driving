<?php
include 'database.php';
if(isset($_POST['submit']))
{
$name=$_POST['uname'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="insert into driving(
name,email,message) values('$name','$email','$message')";
if(mysqli_query($con,$sql))
{
echo "<script>alert('inserted a record Your message has been recorded succesfully!')</script>";
}
else
{
 echo "error".mysqli_error($con);
}
mysqli_close($con);
}
?>