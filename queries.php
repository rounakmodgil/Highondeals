<?php
include("header_cm.php");
include("conn_cm.php");
include("chck.php");
?>
<div class="query">
<img src="images/contactcm.png" width="100%" height="400px" />
<div class="query_form">
<form method="post" action="">
<table cellpadding="4">
<tr>
<td id="qnm">Name:</td>
<td><input type="text" name="query_name" id="query_name">
</td></tr>
<tr>
<td id="qnm">Email:</td>
<td><input type="text" name="query_email" id="query_name">
</td></tr>
<tr>
<td id="qnm">Message:</td>
<td><input type="text" name="query_message" id="msge">
</td></tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit" id="submeebutton">
</td></tr>
</table>

</form>
</div>

</div>
<?php
if(isset($_REQUEST['submit']))
{
	$query_name=$_POST['query_name'];
	$query_email=$_POST['query_email'];
	$query_message=$_POST['query_message'];
	$z=mysqli_query($x,"insert into query(name,email,message) 
	values('$query_name','$query_email','$query_message')");
	if($z)
	{
		?>
		<script>
		alert("query submitted");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("query not submitted");
		</script>
		<?php
	}
}
		
	?>

<?php 
include("footer.php");
?>
