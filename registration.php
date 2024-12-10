<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> registration form</title>
    <link rel="stylesheet" href="home.css">
</head>
<style>
 body{
  background-color: aquamarine;

 }
 input[type=text],input [type=email], input[type=textarea],input[type=password]
 {
margin: 8px 0;
    width: 100%;
    padding: 12px 20px;
    display: inline-block;
    border: 2px solid rgb(108,87,76);
    box-sizing: border-box;
 }

</style>
<body>
    <?php include "./navbar.html"; ?>
    <form action="regproc.php" method="post"  class="form">

   
    <h2>   <center> Registration Form</center></h2>
   
  <div style="padding: 25px; background-color: darkgrey;"> 
    <label for="uname"> First Name: </label>
    <input type="text" name="uname" id="uname" placeholder='first name' required>
   <br>
    
    <label for="courses" name="courses">Courses</label>
    <select name="courses" id="courses">

<option value="4-Wheeler">4-wheeler</option>
<option value="2-Wheeler">2-Wheeler</option>
<option value="3-Wheeler">3-Wheleer</option>
<option value="8-Wheeler">8-Wheeler</option>

</select>
<br>
<label for=""> Gender</label>
<br>
<input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>

<br>
<input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
<br>
<input type="radio" name="gender" value="other" id="other"><label for="other">Other</label>
<br>
<!-- <label for=""> phone</label>
<input type="text" name="country code" value="+91" maxlength="3"> -->
<!-- <br> -->
<label for="">Phone</label><input type="text" name="phone" value="" maxlength="10" required>
<br>

<label for="address"> Address:</label>
 <br>
 <textarea id="address" name="address" cols="80" rows="5" value="Address" required></textarea>
 <br>
<label for=""> Email</label>
<input type="email" id="email" name="email" required>
<br>
<label for=""> Password:</label>
<input type="password" name="password" value="" required>
<br>
<input type="submit" name="submit" value="submit">

</div>
<?php include "./footer.html"; ?>
</form>

</body>
</html>