<?php
session_start();
include("conn_cm.php");
$em=$_POST['em'];
$pd=$_POST['password'];
$y=mysqli_query($x,"select * from register where email='$em' && password='$pd'");
$l=mysqli_num_rows($y);
if($l>0)
{
	$_SESSION['email']=$em;
	header('location:loginhome.php');
}
else{
	header('location:login.php?y=1');
}
?>