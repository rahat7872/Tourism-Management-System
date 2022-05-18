<?php
SESSION_START();
include('config.php');
if($_SESSION["email"]==true)
{

}
else
{
	header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<title>Tourism Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
	
	
	<style>
	

body
{
	margin:2px;
	background-color:linen;
}
* 
{
  box-sizing: border-box;
}

.header {
  background-color: #f1f1f1;
  padding: 60px;
  text-align: center;
  color:#fff;
  font-family:Georgia;
  font-style:italic;
  background-image: url('m.jpg');
  height: 45vh;
  background-size:cover;
  background-position:center;
}

.topnav {
  overflow: hidden;
  background-color: #4682B4
}

.topnav a {
  float: left ;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.active {
  background-color: #3c3c3c;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}


.footer {
  background-color:#221F1F;
  padding: 8px;
  text-align: center;
  color:#F8F8FF;
}

	



.sidenav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidenav li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.sidenav li a.active {
  background-color: #4CAF50;
  color: white;
}

.sidenav li a:hover:not(.active) {
  background-color: #555;
  color: white;
}











</style>




<body>

  <!-- Header -->
      
	  
	  

<div class="header">
 
</div>

<div class="topnav">
  <a  href="home.php">Home</a>
  
    <a href="change_password.php">Profile</a>
  <a href="tour.php">Tour History</a>
  <a class="active" href="feed.php">Feedback</a>
  
    
	

	  <a style="float:right" href="logout.php">Logout</a>
</div>




<?php

$email=$_SESSION["email"];

$query=mysqli_query($connection,"select * from user where email='$email'");
$row=mysqli_fetch_array($query);
$id=$row["id"];
$n=$row["username"];


if(isset($_REQUEST["submit"]))
{
   $C=$_REQUEST["comment"];
   
$sql=mysqli_query($connection,"INSERT INTO `feedback`(`F_ID`,id, `Name`, `Email`, `Comment`) VALUES ('Last_Insert_Id()','$id','$n','$email','$C')");

}
?>	  

	  
	             <form class="w3-container"  method="post">
									   
									                     
                
                         <p>
                  <h1 style="text-align:center">Comment</h1>
				   <label>Comment :</label>
                  <textarea type="textarea" name="comment" placeholder="write something.."style="height:150px;width:100%" ></textarea>
                </p>
					   
					  

  <input type="submit" name="submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     
            </form>
	    
	  <br> <br>
	    
	  <div class="row">
  <div class="column">
     
	  <br> <br>
	  
   <div class="w3-container">
      
         
      </div>
	  
	  	
  </div>
</div>
	  <br><br>
      
          
  </div>

<div class="footer">
  <p>&copy 2019 Tourism Management System <br> All right reserved. Follow me on</br></p>
  <a target="_blank" href="https://www.facebook.com/profile.php?id=100005562049014"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a>
  <a target="_blank" title="follow me on instagram" href="https://www.instagram.com/maisha.muntaha/"><img alt="follow me on instagram"src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>
</div>


</body>
</html>
