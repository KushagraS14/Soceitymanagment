<?php

$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
    include 'dbconnect.php';
    
    $username=$_POST["username"];    
    $password=$_POST["password"];    
    $cpassword=$_POST["cpassword"];    


    $existSql = "SELECT * FROM `users` WHERE email = '$username'";
    $result = mysqli_query($conn, $existSql);
    
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
     
        $showError = "Username Already Exists";
    }
    else{
       
        if($password == $cpassword)
        {
            $sql = "INSERT INTO `users` ( `email`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
                header("location: login.php");
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign_Up</title>
</head>
<link rel="stylesheet" href="css\style.css">
<style>
    /*css reset*/
    body{
        margin:0px;
        padding:0px;
        background:url('https://blog.myrsa.in/wp-content/uploads/2018/08/Untitled-design-6.png');
        background-repeat: no-repeat;
        background-size: cover;
    
        
    }
 
    .left{
        display:inline block;
        color:rgb(244, 249, 244);

    position:absolute;
    top:20px;
    left: 60px;
    text-align: center;
    font-weight:bold ;
    font-family: 'Times New Roman', Times, serif;
    }

    .left img{
        width:123px;
    }
    .left div{
        text-align:center;
        font-style: bold;
    }
    .mid{
    text-decoration-color:rgb(12, 12, 12);
   border: 2px solid rgb(245, 245, 241);
   background-image: url('https://th.bing.com/th/id/OIP.edTT40FLlzSD8I-pMhivzgHaE8?pid=ImgDet&rs=1');
   display:block;
   width:55%;
   margin:20px auto;
   border-style: double;
   

    }
    .right{
        display:inline-block;
        color:white;

    position:absolute;
    right:4px;
    top:20px;
    }
    .navbar{
        display:inline-block;
        
    }
    .navbar li{
        display:inline-block;
        font-size:20px;
    }
    .navbar li a{
        color:white;
        text-decoration: none;
        padding:34px 23px;
      
    }
    .navbar li a:hover,.navbar li a.active{
       
        text-decoration: underline;
        color:rgb(251, 235, 5);
        
      
    }
    .btn{
        margin:0px 9px;
        background-color: black;
        color:whitesmoke;
        text-shadow: 3px;
        padding:4px 16px;
        border:2px solid grey;
        border-radius: 10px;
        font-size: 15px;
        cursor:pointer;
    }
    .btn:hover{
        background-color: rgb(255, 5, 113);
    }
    .container{
        border:2px solid rgb(253, 253, 253);
        color:rgb(232, 244, 232);
        padding:75px;
        margin:122px auto;
        width: 18%;
        border-radius:12px;
        text-align:center;
        background-image:url('https://th.bing.com/th/id/OIP.edTT40FLlzSD8I-pMhivzgHaE8?pid=ImgDet&rs=1');
        text-shadow:white;
        left:25px;
      

    }
    .form-group input{
        text-align:center;
        display:block;
        width: 20%;
        padding: 63px;
        border:2px solid black;
        margin:3px auto;
    }
    .register{
        color:rgb(5, 238, 250);

    }

</style>
<body>
    <header class="header">
        
    </header>
   <!-- left box for logo -->
    <div class="left">
 <img src="https://th.bing.com/th/id/R.be8b51fda7658a2853c245ae2b2d79f8?rik=uNaM1mbZoZWSHw&riu=http%3a%2f%2fcibiod.in%2fassets%2fimages%2fcibiod%2fourBrains%2f8_thapar.png&ehk=VsWhr%2bTBkQdYKcdBAWW1UxUfiWkOlMSajN5GNpeQd3Q%3d&risl=&pid=ImgRaw&r=0" alt=" ">
   
   
    <div style="color:white;">SOCIETY CLUB</div>
</div>
   

 <div class="container">
 <h1>   A Place Where People Meet And Interact New Persons.</h1>
  <div class="register"><h3>   REGISTER HERE</h3></div>
 
    <div class="formgroup">
 

    <form action="\money_php\this_project\society\signup.php" method="post">
  <label for="email">UserId</label><br>
  <input type="email" id="email" name="username" required><br>

  <label for="password">Password</label><br>
  <input type="password" minlength=8  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
  id="password" name="password" 
  required>
 <br>
  <label for="cpassword">Confirm Password</label><br>
  <input type="password" id="cpassword" name="cpassword" required>


  <br><br>
  <button class="btn">Submit</button><br><br>
  
  <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        
    </div> ';
    }
    
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
       
    </div> ';
    }

    ?>

   
 <br>

    Already Have account?
    <button class="btn"> <a style="color:white;" href="login.php"> Log In </a></button>


</form>

  
      
    </div>
</div>

   
  


</body>
</html> 