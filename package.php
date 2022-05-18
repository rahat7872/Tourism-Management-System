

<?php
  include('config.php');
       
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


.holiday {
    padding: 5em 0;
}
.holiday h3 {
    font-size: 2em;
    font-weight: 700;
    color: #34ad00;
}
.holiday p {
    font-size: 1em;
    line-height: 1em;
    margin: 1em 0;
    color: black;
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.rom-btm {
    margin-top: 2em;
	box-shadow: 0px 0px 5px -1px rgba(0, 0, 0, 0.37);
}









</style>




<body>

  <!-- Header -->
      
	  
	  

<div class="header">
 
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a class="active" href="package.php">Packages</a>
  <a href="privacy.php">Privacy Policy</a>
  <a href="contact.php">Contact</a>
    
	
<a style="float:right" href="admin.php">Admin</a>
	  <a style="float:right" href="register.php">User</a>
</div>
	  
	   
	  <div class="row">
  <div class="column">
     
	 <div class="w3-container">
      <div class="container">
	<div class="holiday">
	



	
	<h3>Package List</h3>

       <?php while($row=mysqli_fetch_array($result)) { ?>
	   
	   <div class="rom-btm">
	    
					<img src="<?php echo $row['p_image'];?>" width="30%" height="30%" alt="">
					
         
		<h4> package name : <?php echo $row['P_Name']; ?> </h4>  
	<h6>Package Type : <?php echo $row['P_Type']; ?> </h6>
	<p><b>Package Location :</b> <?php echo $row['Place']; ?> </p>
	<p><b>Features :</b> <?php echo $row['Feature']; ?> </p>
	
     

    
	<h5 style= >Price <?php echo $row['Price']; ?> </h5>
	  
	  <a href="register.php?edit=<?php echo $row['P_ID']; ?>" class="w3-button w3-teal"  >Book</a>
	   <div class="clearfix"></div>
	   </div>
	  <?php }?>
      
	  <br>
       
       </div>
	   </div>
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
