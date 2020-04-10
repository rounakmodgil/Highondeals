<?php 
include('conn_cm.php');
?>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="style_cm.css" type="text/css" rel="stylesheet">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<script  src="j1.js"></script>
</head>
<body>
<div class="lang">

</div>
<div class="logo">
<a href="index.php"><img src="images/logo9new.png" height="100px" width="100%"/></a>
</div>
<div class="menu">
<ul>
<li style="none"><a href="index.php">Home</a></li>
<li><a href="contactcm.php">Contact Us</a></li>
<li><a href="queries.php">Any Queries</a></li>
</ul>
</div>

<div class="login">
<?php
session_start();
  if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
	?>
	<div class="lgn">
	<div class="lgn_pic"><img src="images/account.png" height="40px" width="98%"/></div>
	<?php
    echo ($username);
	?>
	<br/>
	<a href="logout.php"> Logout</a></div>
	<div class="lgn_below"><div class="lgn_pic"><img src="images/cartimg.png" height="40px" width="98%"/></div>
    <a href="cart.php?cart"> Cart</a></div>
    <?php
  }
  else{
	  ?>
	<input type="button" value="Login" id="login_b" onclick="location.href='login.php'"/><?php
  }
?>
</div>
<div class="button-add">
<button onclick=window.location.href='freead.php'>Submit a Free Ad</button>
</div>
<div class="blank-after">
</div>
<div class="header-img">
<img src="images/hero.jpg" height="440px" width="100%" />
<div class="centered">
<p id="sell">Sell or Advertise anything online with classyMARKET</p>
<p id="join" >Join the millions who buy and sell from each other
everyday in local communities around the country</p>
</div>
</div>
