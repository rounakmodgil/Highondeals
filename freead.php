<?php
include('mainhead.php');
include('conn_cm.php');
include("chck.php");
?>
<div class="submit_add">
<div class="upr_line">
<h3>Submit a Free Classified Ad</h3>
</div>
<form method="post" action="" enctype="multipart/form-data">
<label class="prd_nm">Product Name:</label>
<input type="text" name="pn"  class="prdstyle"/><br/>
<label id="scatgory">Select Subcategories:</label>
<select id="scatgory-txt" name="satname" >
<?php 
$res=mysqli_query($x,"select * from subcategory_table");
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row[2] ?>"> <?php echo $row[2]?> </option>
	
	<?php
}
?>
</select><br/>
<label id="pric">Price:</label>
<input type="number" name="pricen" id="pricetxt">
<br/>
<label id="pric">Image:</label>
<input type="file" name="imgr" id="fl_styl"><br/>
<input type="submit" value="Submit" name="submit" id="adds-button">


</form>
</div>
<?php
if(isset($_REQUEST['submit']))
{
	$pn=$_POST['pn'];
	$satname=$_POST['satname'];
	$pricen=$_POST['pricen'];
	$tpname=$_FILES['imgr']['tmp_name'];
	$pname=$_FILES['imgr']['name'];
	$hh=move_uploaded_file($tpname,"admin/images/".$pname);
	if($hh)
	{
		$z=mysqli_query($x,"insert into product(p_name,subcategory_id,price,image) 
		values('$pn','$satname','$pricen','$pname')") or mysqli_error("Not inserted");
		if($z>0)
		{
			?>
			<script>
			alert ("advertisement added");
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert("not added");
			</script>
			<?php
		}
	}
}
?>
<?php
include('footer.php');
?>