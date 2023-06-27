<?php
include 'dbconnect.php';
$count=1;

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
    .container1{
        border:2px solid rgb(253, 253, 253);
        color:rgb(232, 244, 232);
        padding:30px;
        margin:70px 50px;
        width: 80%;
        border-radius:12px;
        text-align:center;
        background-image:url('https://th.bing.com/th/id/OIP.edTT40FLlzSD8I-pMhivzgHaE8?pid=ImgDet&rs=1');
        text-shadow:white;
        left:25px;
        float:left;
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
  
    <div class="left">
 <img src="https://th.bing.com/th/id/R.be8b51fda7658a2853c245ae2b2d79f8?rik=uNaM1mbZoZWSHw&riu=http%3a%2f%2fcibiod.in%2fassets%2fimages%2fcibiod%2fourBrains%2f8_thapar.png&ehk=VsWhr%2bTBkQdYKcdBAWW1UxUfiWkOlMSajN5GNpeQd3Q%3d&risl=&pid=ImgRaw&r=0" 
 alt=" ">
   
   
   
</div>

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
    
    
   
   <?php

$sql ="Select * from `society` order by s_name";
$result = mysqli_query($conn,$sql);
$url=false;
if($result){
    while($row=mysqli_fetch_assoc($result))
    {
          $sno=$row['sno'];
          $s_name = $row['s_name'];
          $about = $row['about'];
          $image = $row['image'];
          $link = $row['link'];
         
    

          $fptr= fopen("$s_name.php","w");
          
         
     
          fwrite($fptr,
          '
          <?php
          include "dbconnect.php";
          
          ?>
          
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Society Club</title>
              <link
              rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
                >
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
              <link rel="stylesheet" href="style.css">
          </head>
          <link rel="stylesheet" href="css\style.css">
          <style>
              /*css reset*/
              body{
                  margin:0px;
                  padding:0px;
                  background:url("https://blog.myrsa.in/wp-content/uploads/2018/08/Untitled-design-6.png");
                  background-repeat: no-repeat;
                  background-size: cover;
              
                  
              }
              .left{
                  display:inline block;
                  color:rgb(244, 249, 244);
          
              position:absolute;
              top:0px;
              left: 20px;
              text-align: center;
              font-weight:bold ;
              font-family: "Times New Roman", Times, serif;
              }
              .left img{
                  width:100px;
              }
              .left div{
                  text-align:center;
                  font-style: bold;
              }
              .mid{
              text-decoration-color:rgb(12, 12, 12);
             border: 2px solid rgb(245, 245, 241);
             background-image: url("https://th.bing.com/th/id/OIP.edTT40FLlzSD8I-pMhivzgHaE8?pid=ImgDet&rs=1");
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
                  padding:34px 14px;
                
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
                  background-image:url("https://th.bing.com/th/id/OIP.edTT40FLlzSD8I-pMhivzgHaE8?pid=ImgDet&rs=1");
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
           <li><a href="home.php"> Home</a></li>
              <li><a href="societies.php">Societies</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="members.php">Members</a></li>
              <li><a href="wanna_member.php">Wanna Member?</a></li>
              <li><a href="signout.php">Sign Out</a></li>
             
               </ul>
              </div>
             
              <script src="https://cdn.tailwindcss.com"></script>
              <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
              <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
              <script nomodule src="../images/aiet-logo.png"></script> 
          
              <div class="me">
              <div class="flex justify-center bg-gradient-to-r from-blue-700 via-blue-800 to-stone-900 p-4 animate__animated animate__fadeIn">
               <div class="flex flex-col justify-center items-center animate__animated animate__slideInDown">
                  <div class="flex flex-col md:flex-row max-w-8xl justify-center items-center ">
                                              
                   <div class="overflow-hidden md:w-3/4 m-4 flex justify-center bg-white  ">
                                              
                   <div class="flex flex-col md:flex-row items-center justify-center md:w-3/4  ">
                   <div class=" flex flex-col items-center justify-center flex py-2">
                  <div style=" text-align:centre;text-transform:uppercase;text-decoration:underline;padding: 2px;"
                  class="text-3xl font-bold text-stone-700 text-center md:-ml-24">  '.$s_name.' </div>
                   <div class="text-md text-stone-700 font-medium text-center md:-ml-24 m-2">CLUB SUMMARY</div>
                  <div class="flex flex-col md:flex-row   items-center justify-center   mx-10">
                                              
                      <div
                      class="pl-2 pt-2 bg-gradient-to-r from-blue-700 via-blue-600 to-stone-700 rounded-full ">
                                              
                      <img src="'.$image.'" alt=".../"  width="800" height="700"
                     class="rounded-full" />
                     </div>
                     </div>
                     </div>                       
                      </div>                                               
                      </div>
                      </div>                       
                      </div>
                      </div>                       
                       </div>     
                        <div>
                 <div style="background-color:white; padding:5px" class=" font-normal italic">
                  
                   '.$about.'
           
                  
                  
                   <?php
                   if("'.$link.'" !="")
                 {
                     echo
                     \'
                   <div style="color:black; font-weight:bold;"><a href="'.$link.'">more...</a></div>
                     
                 \';
                 }           
                  ?>
                  </div>
                  </div>
                                      
          
                     
               
                <br>
                <br>
          <div style="background-color:black;">
          <h2 style="color:white; text-decoration:underline; text-align:centre; margin-top:20px; font-size:30px;font-weight:bold" 
                      class="underline underline-offset-1 text-center text- decoration-2 ">
                        MEMBERS
                      </h2>
              <p class="text-white">Total Members = <?php 
                          $p ="select count(*) as count from members where society= \''.$s_name.'\' ";
                         
                            
            
               $result= mysqli_query($conn,$p);
                $row = mysqli_fetch_assoc($result); 
                echo $row["count"];?></p>
          
             
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
          
            <?php
          
          $sql ="select * from `members` where society=\''.$s_name.'\' ";
          $result = mysqli_query($conn,$sql);
          $count=1;
          if($result){
              while($row=mysqli_fetch_assoc($result))
              {
                    $sno=$row["sno"];
                    $rollno = $row["rollno"];
                    $name = $row["name"];
                    $userId = $row["userId"];
                    $society = $row["society"];
                    $type = $row["type"];
                    echo \'
                    <tr class="animate__animated animate__backInUp">
                    <td>\'.$count.\'</td>     
                <th scope="row">\'.$rollno.\'</th>
                <td>\'.$name.\'</td>
                <td>\'.$userId.\'</td>
                <td>\'.$type.\'</td>
          
                </tr>\';
          
                $count++;
              }
          }
          
          ?>
          
            </tbody>
          </table>
          
          
          </div>
          <br>
                
                
          
                <br>
                <br>
                
                <div style="background-color:black;">
                          <h2 style="color:white; text-decoration:underline; text-align:centre; margin-top:20px; font-size:30px;font-weight:bold" 
                          class="underline underline-offset-1 text-center text- decoration-2 ">
                             UPCOMING EVENTS
                          </h2>
                          <p class="text-white">Total Events = <?php 
                          $p ="select count(*) as count from events where society=\''.$s_name.'\'  AND end_date>=CURDATE() ";
                           $result= mysqli_query($conn,$p);
                            $row = mysqli_fetch_assoc($result); 
                            echo $row["count"];?></p>
                      
                         
                      <table class="table table-striped  text-white">
                        <thead>
                          <tr>
                          <th scope="col">S_No</th>
                            <th scope="col">EVENT_NAME</th>
                            <th scope="col">START_DATE</th>
                            <th scope="col">END_DATE</th>
                            <th scope="col">TIME</th>
                            <th scope="col">PLACE</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                      
                        <?php
                     
                      $sql ="Select * from events  where society=\''.$s_name.'\' AND end_date>=CURDATE() order by start_date,time ";
                      $result = mysqli_query($conn,$sql);
                       $count=1;
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                          {
                      
                                $name=$row[\'name\'];
                                $sdate = $row[\'start_date\'];
                                $edate = $row[\'end_date\'];
                                $society = $row[\'society\'];
                                $place = $row[\'place\'];
                                $time = $row[\'time\'];
                                echo \'
                                <tr class="animate__animated animate__backInUp">
                                <td>\'.$count.\'</td>   
                            <th scope="row">\'.$name.\'</th>
                            <td>\'.$sdate.\'</td>
                            <td>\'.$edate.\'</td>
                            <td>\'.$time.\'</td>
                            <td>\'.$place.\'</td>
                      
                           
                            </tr>\';
                           $count++;
                      
                          }
                      }
                      
                      ?>
                      
                        </tbody>
                      </table>
                      
                      
                      
                      
                      </div>
          
          
          ');
       
          fclose($fptr);
 

echo' 
 <div class="container1">
    <h1>
       '.$count.'.  
     <a style="color:white; text-align:centre;text-transform:uppercase;text-decoration:underline;" href="'.$s_name.'.php" > '.$s_name.' </a>
    </h1>

    <div>
    <img src="'.$image.'" alt=".../"  width="200" height="200"
           class="rounded-full" />

    </div>
    
    '.$about.'
    

</div>

';



$count++;

}
}

?>


    
</body>
</html>