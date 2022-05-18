<?php

  include('config.php');
   $pn=$_POST["pn"];
   $pt=$_POST["pt"];
   $pl=$_POST["pl"];
   $ft=$_POST["ft"];
    $p=$_POST["p"];
	
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"p/" . $newFilename);
	$location="p/" . $newFilename;
	
	mysqli_query($con,"insert into package (p_image,`P_ID`, `P_Name`, `P_Type`, `Place`, `Feature`, `Price`) values ('$location','Last_Insrt_Id()','$pn','$pt','$pl','$ft','$p')");
	

    header('Location: admin/package.php');






?>