
<!doctype html>
<html>
       <head>
	        <meta charset="utf-8">
	        <title>Tourism Management System</title>
			<link rel="stylesheet" href="loginstyle.css">
	   </head>
	   <body>
           
           <div class="header">
  	<h2>LogIn</h2>
  </div>
	   
	    	      <form method="post" action="visitor.php ?>">
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required="" >
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required="">
  	</div>
  	
  	<div class="input-group">
	
  	  <button type="submit" class="btn" name="submit_btn">Login</button>
	 
	    <h4><a href="index.php">Go To Home</a></h4>
  	</div>
  
  </form>












		<?php
 session_start();
 require('config.php');
 if(isset($_POST['email']) and isset($_POST['password'])){
     $email=$_POST['email'];
     $password=$_POST['password'];
     
     $query="SELECT * FROM user WHERE email='$email' and password='$password'";
     
     $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
     
     $count=mysqli_num_rows($result);
     
     if($count==1)
     {
         $_SESSION['email']=$email;
         echo"You have logged in successfully";
         
         header("location: home.php");
     }
     else{
        echo '<script type="text/javascript"> alert("Username or password incorrect!") </script>';

     }
  
 }




 
?>
			</div>
	   </body>
</html>