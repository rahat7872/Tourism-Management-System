<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','projectweb');
  $connection=mysqli_connect(db_server,db_username,db_password,db_database);
  
  
  if($connection){
      echo"";
  }
else{
    echo"Failed to connect to database";
   }
?>

<?php
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'projectweb');
?>