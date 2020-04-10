<?php
include("conn_cm.php");

if(!isset($_SESSION['username']))
{
    
    ?>
	 <script>
	 alert("plz fill the login details to move further");
	 </script>
	 <?php
	echo "<script>
	window.location.href='login.php'
	</script>";
	
}
else{
    $email=$_SESSION['username'];
}
?>