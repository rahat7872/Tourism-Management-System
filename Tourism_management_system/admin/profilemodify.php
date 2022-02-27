<?php
  include('config.php');
       
       $sql="SELECT * FROM `tblusers`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    
    header('location: profile.php');
	
}

  


?>