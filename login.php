<?php
include_once "./nav.php";


 session_start();
 if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if( empty($email) || empty($password)){
        echo "Both fields are required and must not be empty";
    }else{
        
			$users = file("data/info.txt");

			foreach ($users as $user)  {

              list($firstName,$lastName,$saved_email,$saved_password)=explode(",", $user);
				               
              
				if ($email == $saved_email && $password == rtrim($saved_password)) {              
                  
                    $_SESSION['firstName'] = $firstName;
                    $_SESSION['lastName'] = $lastName;
                    header("Location: index.php");
                    exit();
                }
            
    }
    echo "Invalid email or password.";   
    
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  
    <style>
        .container{
            margin-left: 33%;
        }
        h1{
            text-align: center;
        }
     input[type=text], input[type=password] {
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display:block;
    border: none;
    background: #f1f1f1;
  }
  button{
    margin-left: 20%;
    background-color: #04AA6D;
    color: white;
    padding: 10px;
    
    border: none;
    cursor: pointer;
   
    opacity: 0.9;
  }
    </style>
</head>
<body>   



     <h1>Login</h1>
 
    <form action="login.php" method="post">
        <div class="container">               
            
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password">
            
    
            <button class="registerbtn" type="submit" name="login" value="lofin">Login</button>
        </div>

    </form>
</body>
</html>