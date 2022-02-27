
<!doctype html>
<html>
       <head>
	        <meta charset="utf-8">
	        <title>Welcome to homepage</title>
			<link rel="stylesheet" href="loginstyle.css">
	   </head>
	   <body>
	   
	               <div class="header">
  	<h2>LogIn</h2>
  </div>
	   
	    	      <form method="post" action="admin.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required="">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required="">
  	</div>
  	
  	<div class="input-group">
	
  	  <button type="submit" class="btn" name="submit_btn">Login</button>
	  
  	</div>
	
	
	  <h4><a href="index.php">Go To Home</a></h4>
	
  
  </form>
  
  

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                     
	<?php
 session_start();
 require('config.php');
 if(isset($_POST['username']) and isset($_POST['password'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     
     $query="SELECT * FROM admin WHERE username='$username' and password='$password'";
     
     $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
     
     $count=mysqli_num_rows($result);
     
     if($count==1)
     {
         $_SESSION['username']=$username;
         echo"You have logged in successfully";
         
         header("location: admin/home.php");
     }
     else{
        echo '<script type="text/javascript"> alert("Username or password incorrect!") </script>';

     }
  
 }




 
?>
			</div>
	   </body>
</html>