<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
 {
    header('location: login.php');
    exit;
}
$showAlert = false;
$showError=false;
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{ 
  $name = $_POST['myname'];
  $rollno = $_POST['myrollno'];
  $email = $_POST['myemail'];
  $year = $_POST['myyear'];
  $branch = $_POST['mybranch'];
  $society = $_POST['mysociety'];
  $phone = $_POST['myphonenumber'];
  $message = $_POST['mytext'];

  if($name=='' || $rollno=='' || $email=='' || $year=='' || $branch=='' || $society=='' || $phone=='' || $message=='')
  {
    $showError = "Invalid Credentials";
  }

  else
  {
    $sql="INSERT INTO `contact_form` ( `name`, `rollno`, `userId`, `year`, `branch`, `society`, `phone`, `about_yourself`) VALUES
   ('$name', ' $rollno', '$email', '$year', '$branch', '$society', '$phone', '$message')";
  



  $result = mysqli_query($conn, $sql);
  if ($result){
      $showAlert = true;
  
    }



mysqli_close($conn);
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Society Club</title>
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
        padding:34px 15px;
      
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
        margin:auto;
        width: 25%;
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
        cursor:pointer;
    }

</style>
<body>
    <header class="header">
        
    </header>
   <!-- left box for logo -->
    <div class="left">
 <img src="https://th.bing.com/th/id/R.be8b51fda7658a2853c245ae2b2d79f8?rik=uNaM1mbZoZWSHw&riu=http%3a%2f%2fcibiod.in%2fassets%2fimages%2fcibiod%2fourBrains%2f8_thapar.png&ehk=VsWhr%2bTBkQdYKcdBAWW1UxUfiWkOlMSajN5GNpeQd3Q%3d&risl=&pid=ImgRaw&r=0" alt=" ">
   
   
    <div>SOCIETY CLUB</div>
</div>
    <!---mid  box for nav bar-->
    <div class="mid">
 
 <ul class="navbar">
 <li><a href='home.php'> Home</a></li>
    <li><a href='societies.php'>Societies</a></li>
    <li><a href='events.php'>Events</a></li>
    <li><a href='members.php'>Members</a></li>
    <li><a href='wanna_member.php'>Wanna Member?</a></li>
    <li><a href='signout.php'>Sign Out</a></li>

     </ul>
    </div>
    <!-- right box for buttons-->
   
   <!-- <div style="display:inline;">  -->
 <div class="container">
 <h1>   A Place Where People Meet And Interact New Persons.</h1>
  <br>


<!-- <div class="container"> -->
 <div style="text-decoration:underline;" class="contact"><h1>   CONTACT US</h1></div>
 
   
  

    <form action="\money_php\this_project\society\wanna_member.php" method="post">

    <label for="name">Name</label><br>
  <input type="text" id="name" name="myname" required><br>
  <br>
  <label for="roll">Roll Number</label><br>
  <input type="number" id="roll" name="myrollno" required><br>
  <br>
  <label for="email">UserId</label><br>
  <input type="email" id="email" name="myemail" required><br>
  <br>

  <label for="year">Year</label><br>
  <select name="myyear" id="year">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>


  <br>
  <br>
  <label for="branch">Branch</label><br>
  <input type="text" id="branch" name="mybranch" required><br>
  <br>
  <label for="society">Society U want to join</label><br>
  
  <?php
include 'dbconnect.php';

$query = "SELECT * FROM `society` ";
$results = mysqli_query($conn, $query);


echo '<select name="mysociety" required id="society">';

while($row = mysqli_fetch_assoc($results)) 
{
echo '<option value="'.$row['s_name'].'"  >'.$row['s_name']. '</option>';

}
echo '</select>';

?>


  <br>
  <br>

  <label for="phone">Phone Number</label><br>
  <input type="tel" id="phone" name="myphonenumber"  pattern="[0-9]{10}" required>
  
  <br>
  <br>
  <label for="yourself">Write about Yourself</label><br>
  <textarea id="yourself" name="mytext" cols="40 " rows="10" required>  </textarea>
  <br>
  <br>
    <button class="btn">Submit</button>

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Information is sent sucsessfully to society admin.
        
    </div> ';
    }

    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
           
        </div> ';
        }

    ?>

<div class="info">
			<div class="sub-info-main">
				
					<h2>Address</h2>
					<p class="address-para">
						Societies Club,Thapar Univeristy,
                        Pataila,Punjab<br>
						India
					</p>
			</div>

</div>

</form>
</div>

</body>
</html> 