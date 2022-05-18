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

if(isset($_GET['edit'])){
    $id = $_GET['edit'];

	
	
	
    $rec = mysqli_query($connection, "DELETE FROM booking WHERE B_ID='$id';");
header('location:tour.php');	
	
	
  
}
   
	
	




?>