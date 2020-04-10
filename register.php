<?php
include("header_cm.php");
include("conn_cm.php");
?>
<div class="reg_header">
<p class="reg_stylep">Register</p>
<form  method="post" action="">
<label class="us_lbl">Username*</label>
<input type="text" name="us" class="uslbl_inp"   required/><br/>
<label class="ph_lbl">Phone*</label>
<input type="number" name="pn" class="phlbl_inp"  /><br/>
<label class="pwd_lbl">Password*</label>
<input type="password" name="pwdd" class="pwd_inp" maxlength="8" minlength="4" required/><br/>
<label class="name_lbl">Email*</label>
<input type="email" name="em" class="name_inp" required/><br/>
<label class="add_lbl">Address*</label>
<textarea rows="5" cols="25" class="add_style" name="add"> </textarea><br/>
<label class="gend_lbl">Gender:</label>
<input type="radio" name="m" value="male" class="gend_lblf">Male
<input type="radio" name="m" value="female" class="gend_lblf">Female<br/>
<input type="submit" value="Register"  name="submit" class="regg_btn"/>
</form>
<div class="reg_ryt_ctnt">
<p>By registering, you get access to <b>My Account</b> where you can:</p>
<ul>
<li>Manage your Ads (Edit, Delete, Upgrade)</li>
<li>Check responses to your Ads</li>
<li>Track payments</li>
<li>Manage your settings</li>
</ul>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
	$us=$_POST['us'];
	$pn=$_POST['pn'];
	$pwdd=$_POST['pwdd'];
	$em=$_POST['em'];
	$add=$_POST['add'];
	$m=$_POST['m'];
	$z=mysqli_query($x,"insert into register(username,phone,password,email,address,gender) values('$us','$pn','$pwdd','$em','$add','$m')")
	or mysqli_error("not inserted");
	if($z>0)
	{
	
		echo "<script>
		alert('Account Created');
		window.location.href='login.php';
		</script>";
		
	
	
	}
	else
	{
		echo
		"<script>
		alert('Account not Created');
		</script>";
		
	}
	
}
?>