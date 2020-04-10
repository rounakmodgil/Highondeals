<?php
include("header_cm.php");
include("conn_cm.php");
?>
<div class="form-login">
<p class="one">Log In</p>
<form method="post" action="logincheck.php">
<label class="us-style"> Username:</label>
<input type="text" name="us" class="uslog"/><br/>
<label class="em-style"> Email:</label>
<input type="email" name="em" class="emlog"/><br/>
<label class="pd-style">Password:</label>
<input type="password" name="pd" class="pd-input"/><br/>
<div class="grey-outline">
<input type="submit" value="Log in" name="submit" id="lg-button">
</div>
</form>
<p class="p-data"><a href="resetpwd.php">Unable to Login?</a>
<a href="register.php" id="a-data">Register</a></p>
<br/>


</div>
<?php 
@$a=$_GET['y'];
if($a==1)
{
	?>
	<script>	
	alert("wrong username and password");
	</script>
	<?php
}
?>
	
	
	

