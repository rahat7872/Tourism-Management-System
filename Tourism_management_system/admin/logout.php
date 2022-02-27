<?php
session_start();
require('config.php');
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="You are now logged out";
header("location: ../admin.php");
?>