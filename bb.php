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
$email =$_POST["email"];
$query=mysqli_query($connection,"select * from user where email='$email'");
$row=mysqli_fetch_array($query);
$uid=$row["id"];
$n=$_POST["n"]; 

	 	   

$status=0;

 $fd =$_POST["fd"];
 $td = $_POST["td"];
  $m= $_POST["m"];


 
  $Pa=$_POST["pa"];
  $pt= $_POST["pt"];
    $trx= $_POST["trx"];
  $pr=$_POST["pr"];
  $gp=$_POST["gp"];
  $rp=$_POST["rp"];
	
  $me=$_POST["me"];







$sql="INSERT INTO `booking`(`B_ID`, `id`, `username`, `Email`, `mobile`, `P_ID`, `P_Name`, `FromDate`, `ToDate`, `Payment_Type`, `Price`, `Paid_Price`, `Remaining_Price`,  `member`,`T_ID`,  `Status`) VALUES (Last_insert_ID(),'$uid','$n', '$email','$m',(select P_ID from package where P_Name='$Pa'),'$Pa', '$fd', '$td','$pt', '$pr', '$gp','$rp','$me','$trx','$status' )";
if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: tour.php');
}
else{
    echo "Something went wrong.";
}


?>





  
      








