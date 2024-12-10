<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">

</head>
<body>
    <?php include "./navbar.html"; ?>
    <h3 class="fcf-h3">Contact us</h3>
    <form align="center" action="process.php" method="post"  class="form">
    <div class="">
            <label for="Name" class="">Your name</label>
            <div class="">
                <input type="text" id="Name" name="uname" class="" required>
            </div>
        </div>

        <div >
            <label for="Email" class="">Your email address</label>
            <div >
                <input type="email" id="Email" name="email" class="" required>
            </div>
        </div>

        <div >
            <label for="Message" class="">Your message</label>
            <div >
                <textarea id="Message" name="message" class="" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>
        <input type="submit"> 
        
        
        
        </form>
        <br>
        <br>

    <?php include "./footer.html"; ?>
</body>
</html>