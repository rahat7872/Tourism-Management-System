<?php 


  include('config.php');

SESSION_START();


if($_SESSION["username"]==true)
{
	

	
}
else
{
	header('location:../index.php');
}



       
       $sql="SELECT * FROM `package`;";
       $result=mysqli_query($connection,$sql);

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
  <a href="home.php">Dashboard</a>
   <a href="change_password.php">Profile</a>
  
  
                  <a class="active"    href="packag.php">Package List</a>
				    
                               <a  href="../packageadd.php">Add Package</a>
  
  <a href="users.php">Users</a>
  <a href="bookings.php">Booking</a>
  <a href="feedback.php">Feedback</a>
    
	  <a style="float:right" href="logout.php">Logout</a>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
   
   <div class="w3-container">
      
       
      
       <br><br>
       <table>
           <tr><th>Package id</th>
               <th>Name</th>
               <th>Type</th>
               <th>Place</th>
               <th>Feature</th>
			   <th>Price</th>
			   <th>Creation Date</th>
			   <th>Updation Date</th>
			   			   <th>Action</th>
			    
         
            </tr>
           <?php while($row=mysqli_fetch_array($result)) {?>
           <tr>
               <td><?php echo $row['P_ID']; ?></td>
               <td><?php echo $row['P_Name']; ?></td>
               <td><?php echo $row['P_Type']; ?></td>
               <td><?php echo $row['Place']; ?></td>
               <td><?php echo $row['Feature']; ?></td>
			   <td><?php echo $row['Price']; ?></td>
			   <td><?php echo $row['CreationDate']; ?></td>
			   <td><?php echo $row['UpdationDate']; ?></td>
			   
			   
			     <td><a href="packageedit.php?edit=<?php echo $row['P_ID']; ?>" class="w3-button w3-teal" >Edit</a></td>

              
               
				
              
			 
 
           </tr>
           <?php } ?>
       </table>
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
