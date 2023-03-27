<?php
  
   
    include_once "./nav.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration User</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>


     <h1>Registration Form</h1>
     <h1 class="errorMassage"><?php  ?></h1>
    <form action="index.php" method="post">
        <div class="container">

            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="Enter Your First Name">       
            
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="Enter Your Last Name">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password">
            
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter Your Confirm Password">
            <button class="registerbtn" type="submit" name="save" value="save">Register</button>
        </div>

    </form>
</body>
</html>