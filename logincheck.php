<?php
session_start();
include("conn_cm.php");
$us=$_POST['us'];
$em=$_POST['em'];
$pd=$_POST['pd'];
$y=mysqli_query($x,"select * from register where username='$us' && password='$pd'");
$l=mysqli_num_rows($y);
if($l>0)
{
	$_SESSION['username']=$us;
	header('location:index.php');
	
}
else{
	header('location:login.php?y=1');
}
?>