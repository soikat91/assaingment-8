<?php

$errorMessage='';
$successMessage='';
if(isset($_POST['save'])){
 
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    
    // if($firstName !='' && $lastName !='' && $email !='' && $password !='' && $confirmPassword !='')
    if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword))
    {       
        
       $errorMessage= "All fields are required and must not be empty";   
       
       
       
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessage= "The email address must be in a valid format";
    }else if ($password != $confirmPassword){
        $errorMessage= "The password and confirm password fields must match";
         
    }else{
        
        $file = 'data/info.txt';
        $data = $firstName . ',' . $lastName . ',' . $email . ',' . $password . "\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

     
        $successMessage="Registration Successfully Please Login";
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
      
       include_once "./nav.php";
     ?>
    
   <h1 class="errorMassage"> <?php echo $errorMessage?></h1>
   <h1 class="successMessage"> <?php echo $successMessage?></h1>

      <?php

      session_start();
       if(isset($_SESSION['lastName'])) { ?>

       <h1>"Welcome ! To My Webpage <?php echo $_SESSION['firstName']. " ". $_SESSION['lastName'] ; ?>"</h1>
           
      <?php }?>


    <?php  session_destroy();?>
 
</body>
</html>