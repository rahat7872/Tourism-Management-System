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



 $fd =$_POST["fd"];
 $td = $_POST["td"];
  $m= $_POST["m"];
    $me= $_POST["me"];
   $Pa=$_POST["pa"];
  $pt= $_POST["pt"];
  $m= $_POST["m"];
	$email =$_SESSION["email"];
 $n = $_POST["n"];



 {
function dateDifference($start_date, $end_date)
{
    // calulating the difference in timestamps 
    $diff = strtotime($start_date) - strtotime($end_date);
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds
    return ceil(abs($diff / 86400));
}
  
// start date 
$start_date = "$fd";
  
// end date 
$end_date = "$td";
  
// call dateDifference() function to find the number of days between two dates
$dateDiff = dateDifference($start_date, $end_date);
  


 $today=date("m/d/y");
$dateDiff2 = dateDifference($today, $fd);
  

 }
  















  
  $sql1="select Price from package where P_Name='$Pa'";
  $rec1 = mysqli_query($connection, $sql1);
    $record1=mysqli_fetch_array($rec1);
	$pr=$record1['Price'];
	
	$pr=$pr*$dateDiff*$me;
	
	if($pt=='full')
	{
		$gp=$pr;
		$rp=0;
		
	}
	else
	{
		$gp=($pr*20)/100;
		$gp=round($gp);
		$rp=$pr-$gp;
	}
	

	if($fd>$td )
	{
		echo '<script type="text/javascript"> alert("Your Date entries are wrong") </script>';
		 header('Location: home.php');
	}
	
		if($dateDiff2<3 )
	{
		echo '<script type="text/javascript"> alert("You have to book any Package at least 3 days before you want to begin the tour") </script>';
		 header('Location: home.php');
		
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



.column {
  float: left;
  width: 100%;
  padding: 50px;
  background-color:linen;
  background-size:cover;
  
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

	
	
	
	
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 10px;
}


table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
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
  <a  class="active" href="booking.php">Booking</a>
  
  
    
	

	  <a style="float:right" href="logout.php">Logout</a>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <div class="row">
  <div class="column">
     
	  <br> <br>
	  
	  
   
   <div class="w3-container">
      
       
      			   <div class="w3-container" style="padding: 50px 200px 20px 200px">
									   


									   <form class="w3-container" action="bb.php" method="post">
									    <p>
                        <label>Username </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="text" name="n" value="<?php echo $n; ?>" readonly>
					   </p>
					     <p>
                        <label>Email </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="text" name="email" value="<?php echo $email; ?>" readonly>
					   </p>
									   
					                  <p>
                     <label>Mobile</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="number" name="m" value="<?php echo $m ?>" readonly>
                </p>
               
                 <p>
                     <label>From Date</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="fd"value="<?php echo $fd ?>"  readonly>
                </p>
				<p>
                        <label>To Date</label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="date" name="td" value="<?php echo $td ?>" readonly>
					   </p>				   
				    <p>
                        <label>Package Name </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="text" name="pa" value="<?php echo $Pa; ?>" readonly>
					   </p>
					   
					   	                  <p>
                     <label>Total Member</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="number" name="me" value="<?php echo $me ?>" readonly>
                </p>
					   
									   									                    
                  <p>
                        <label>Payment Type </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="text" name="pt"   value="<?php echo $pt; ?>" readonly>
					   </p>
				
				<p>
                        <label>Package Price </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="pr"   value="<?php echo $pr; ?>" readonly>
					   </p>
									                    
                <p>
                        <label>Paid Price </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="gp"   value="<?php echo $gp; ?>" readonly>
					   </p>
               <p>
                        <label>Remaining Price </label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="rp"   value="<?php echo $rp; ?>" readonly>
					   </p>
			
					   
					   
				  <p>
                        <label>Trx ID</label><br>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="trx" required="">
					   </p>
					   
					   
					   
					   
					
					   
					   
                        
             
                 
          <br> <br>
                 
                 
                     <input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     
       
                 
 
      
	  
	  </form>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
       
	   
	   
	   
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
