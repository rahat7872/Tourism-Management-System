<?php
	require ('config.php');
?>
<!DOCTYPE html>
<html>


<head>
  <title>Tourism Management System</title>
  <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required="" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required="" >
  	</div>
	
	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required="">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required="">
  	</div>
  	<div class="input-group">
	
  	  <button type="submit" class="btn" name="submit_btn">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="visitor.php">Sign in</a>
  	</p>
	  <h4><a href="index.php">Go To Home</a></h4>
  </form>

		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

				
				$username = $_POST['username'];
				$email = $_POST['email'];

				$password = $_POST['password_1'];
				$cpassword = $_POST['password_2'];
				
				

		
				

				if($password==$cpassword)
				{
					$query= "select * from user WHERE email='$email' ";
					$query_run = mysqli_query($con,$query);
					
					
					if(mysqli_num_rows($query_run)>0 ) 
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("email already exists.. try another email") </script>';
					}
					else
					{
						$query= "INSERT INTO `user`(`id`, `username`, `email`, `password`) values('$','$username','$email','$password')";
						
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
						}
					}
					
					
				}
				else{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
				}
				
				
				
				
			}
		?>
	</div>
</body>
</html>