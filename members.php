<?php
include 'dbconnect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Society Club</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
        margin:122px 80px;
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



    <h2 style="color:white; text-decoration:underline;" class="underline underline-offset-1 text-center text-primary animate__animated animate__backInDown animate__animated ">
      MEMBERS</h2>
     
      <br>
      <br>
      <br>

   <?php
    $sql ="Select * from `members` group by society order by society";

    $result = mysqli_query($conn,$sql);
$count2=1;

while($row=mysqli_fetch_assoc($result))
{  
        $society = $row['society'];
    

       


    echo '
    <div style="background-color:black;">
    <h2 style="color:white; text-decoration:underline;"   
    class="underline underline-offset-1 text-center text-primary animate__animated animate__backInDown animate__animated ">
    '.$count2.' . '.$society.'
    </h2>
    <p class="text-white">Total Members = ';
     $p = "select count(*) as `count` from `members` where society= '$society' ";
     $result3= mysqli_query($conn,$p);
      $row3 = mysqli_fetch_assoc($result3); 
      echo $row3["count"];
      echo '</p>';

   
      echo '
 <table class="table table-striped  text-white">
  <thead>
    <tr>
    <th scope="col">S_No</th>
      <th scope="col">ROLL_NO</th>
      <th scope="col">NAME</th>
      <th scope="col">THAPAR_ID</th>
      <th scope="col">TYPE</th>
     
    </tr>
  </thead>
  <tbody>

  ';

  
$count=1;
$sql2 ="Select * from `members`  where society= '$society' ";

$result2 = mysqli_query($conn,$sql2);

    while($row2=mysqli_fetch_assoc($result2))
    {     
          $sno=$row2['sno'];
          $rollno = $row2['rollno'];
          $name = $row2['name'];
          $userId = $row2['userId'];
          $society = $row2['society'];
          $type = $row2['type'];

          echo '
          <tr class="animate__animated animate__backInUp">
          <td>'.$count.'</td>
          <th scope="row">'.$rollno.'</th>
      <td>'.$name.'</td>
      <td>'.$userId.'</td>
      <td>'.$type.'</td>

      
      </tr>';

      $count++;
    }

    
   


echo
'
  </tbody>
</table>



</div>

<br>
<br>
';
$count2++;
}

?>


    </body>
</html> 
