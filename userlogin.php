<html>
<head>
<title>HOME</title>
<link href="style_cm.css" type="text/css" rel="stylesheet">
<script  src="j1.js"></script>
</script>
</head>
<body>
<div class="lang">
<p id="select-lang">Select language English|Hindi</p>
</div>
<div class="logo">
<a href="index.php"><img src="images/logo9new.png" height="100px" width="100%"/></a>
</div>
<div class="menu">
<ul>
<li style="none">Home</li>
<li>Dashboard</li>
<li>About Us</li>
<li>Contact Us</li>
</ul>
</div>
<div class="login">
<?php
session_start();
  if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    echo ($email);
	?>
	<script type="text/javascript">
	alert("welcome");
	</script>
	<a href="#"> Logout</a>
    <a href="#"> Cart</a>
    <?php
  }
  else{
	  ?>
	<input type="button" value="Login" id="login_b" onclick="location.href='login.php'"/><?php
  }
?>
</div>
<div class="button-add">
<button>Submit a Free Ad</button>
</div>
<div class="blank-after">
</div>
<?php 
include('header_body.php');
?>
