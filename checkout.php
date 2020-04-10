<?php
include("header_cm.php");
include("conn_cm.php");
include("chck.php");
?>
<div class="c_shwbg"><img src="images/chcoutbg.jpg" width="100%" height="530px" />
<div class="check_show">
<?php
if(isset($_REQUEST['checkout']))
	{
		$g=mysqli_query($x,"select * from register where username='$username'") or die(mysqli_error($x));
		$fg= mysqli_fetch_array($g);
		?> 
		<div>
		<h1 class="ucartadd">Check your address </h1>

		<div class="formm">
		<p>Name:- <?php echo $fg['1'];?></p>  <br>
		<p>Mobile No.:- <?php echo $fg['2'];?></p>  <br>
		<p>Address:- <?php echo $fg['5'];?></p> <br>
		<p><button onclick= window.location.href="checkout.php?edit_address" class="reg_btn" >Edit</button> 
		<button onclick=window.location.href="checkout.php?buys" class="reg_btn">Submit</button></p><br>
		</div>
		</div>
		<?php
    }
     if(isset($_REQUEST['edit_address']))
	  {
		?>
       <h2 class="ucart">Edit User Info</h2> <br>
		<form class="formm" action='#' method='post'> 
        <p>User Name:-  <?php echo $username ?></p><br>

        <p>Add new Address <br><textarea name="new_add"  cols="20" rows="4"? ></textarea></p><br>
        <input type='submit' value='Edit' name='edit_usr' class="reg_editbtn"><br><br>
		</form>
		<?php
       }
	
         ?>
		 <?php
	if(isset($_REQUEST['edit_usr']))
	{
		$newadd=$_REQUEST['new_add'];
		mysqli_query($x,"update register set address='$newadd'where username='$username'") or die(mysqli_error($x));

		header("location:checkout.php?checkout=$username"); 
	}
	if(isset($_REQUEST['buys']))
	{
	mysqli_query($x,"update orders set buy='yes' where usr_name='$username'") or die(mysqli_error($x));
	?>
	<script>
	alert("Thanks For Purchasing.\n Your order will be delivered soon.")
	window.location.href="index.php";
	</script>
  <?php
  
   
}

?>		 
</div>
</div>
<?php 
include('footer.php');
?>