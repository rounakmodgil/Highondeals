<?php
include('mainhead.php');
include('conn_cm.php');
?>
<div class="left_categories">
<div class="cat_style">
<p>Categories</p>
<?php 
$result=mysqli_query($x,"select * from category_table ");
while($rr= mysqli_fetch_array($result))
{
	?>
	<div id="contner">
	<a href='viewproduct.php?cid=<?php echo $rr[0] ?>'> <?php echo $rr[1] ?> </a>
	
	</div>
	<?php
}
?>
</div></div>
<div class="cntr_imge">
<form method="post" action="">
<div class="main_line">
<p>Products</p>
</div>
<?php
if(isset($_REQUEST['cid'])){
$cat=$_REQUEST['cid'];	
$res=mysqli_query($x,"select * from subcategory_table where category_id=$cat");
while($r= mysqli_fetch_array($res))
  { 
	?>
	<div class="prod_image" onclick=window.location.href='viewproduct.php?pid=<?php echo $r[2] ?>'>
	<div class="title_name"><p><?php  echo $r[2]; ?></p></div>
	<div class="img_space"><?php echo "<img src='admin/images/$r[image]' height='150px' width='100%'  />";?></div>
	<div class="bottom"> </div>
	</div>
	<?php
   }	
}
if(isset($_REQUEST['pid'])){
	$pro=$_REQUEST['pid'];	
$ref=mysqli_query($x,"select * from product where subcategory_id='$pro'");
while($f= mysqli_fetch_array($ref))
  { 
	?>
	<form method="post" action="">
	<div class="prod_image" >
	<div class="title_name" ><p><input type="hidden" value="<?php  echo $f[1]; ?>"  name="pdname"/> <?php  echo $f[1]; ?></p></div>
	<div class="img_space_p" onclick=window.location.href='viewproduct.php?pid=<?php echo $f[2] ?>'>
	<?php echo "<img src='admin/images/$f[image]' height='150px' width='100%'  />";?></div>
	<div class="title_price" ><p>Rs.<input type="hidden" value="<?php  echo $f[3]; ?>" name="pdcost"/> <?php  echo $f[3]; ?></p> </div>
	<div class="quant" ><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="BUY" name="buy" class="btnAddcart" /></div>
	</div>
	<?php
   }	
}
?>
</form>
</div>
<?php
if(isset($_REQUEST['buy']))
{

  if(isset($_SESSION['username']))
  {
   
    $pdname=$_POST['pdname'];
    $pdcost=$_POST['pdcost'];
    $quantity=$_POST['quantity'];
    $d=mysqli_query($x,"insert into orders (usr_name,item,price,quantity) values('$username','$pdname','$pdcost','$quantity')") or die(mysqli_error($x));
}
else
{
?>
<script>
  alert("Login first to buy Items");
  window.location.href='login.php';
</script>
<?php
}
}
 

?>
<?php 
include('footer.php');
?>