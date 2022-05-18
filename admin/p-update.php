 <?php
    include('config.php');
   
 $pid=$_POST["pid"];
   $pn=$_POST["pn"];
   $pt=$_POST["pt"];
   $pl=$_POST["pl"];
   $ft=$_POST["ft"];
    $p=$_POST["p"];

$sqlll="UPDATE `package` SET `P_Type`='$pt',`Place`='$pl',`Feature`='$ft',`price`='$p' WHERE `package`.`P_ID`='$pid' and `P_Name`='$pn' " ;
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: package.php');
}
else{
    echo "somthing is wrong";
}


?>