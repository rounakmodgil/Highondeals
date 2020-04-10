<?php
include("header_cm.php");
include("conn_cm.php");
include("chck.php");
?>
<div class="c_shwbg"><img src="images/contactcm.png" width="100%" height="530px" />
<div class="cart_show">
<?php
if(isset($_REQUEST['cart'])){
     ?>
     
     <h2 class="ucart">User Cart</h2>
     <table cellspacing="0" border="1" bordercolor="white">
    <tr>
      
      <th>Item</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Sub Total</th>
	  <th>Remove</th>
    </tr>
       <?php
       $a=0;
       $b=0;
     $f=mysqli_query($x,"select * from orders where usr_name='$username'");
    while( $ff= mysqli_fetch_array($f))
     {
      ?>
      <tr>
        <td>
          <?php echo $ff['2'];?>
        </td>
        <td>
            <?php echo $ff['3'];?>
            </td>
            <td>
            <?php echo $ff['4'];?>
            </td>
        <td>
          <?php 
          $tt=$ff['3']*$ff['4'];
          echo $tt?>
          </td>
            <td class="dlt_btn" onclick= window.location.href="cart.php?del_id=<?php echo$ff['0'];?>">
              remove
            </td>
                     </tr>
          <?php
        $a=$a+$tt;
        $b=$b+$ff['4'];  
        }
         
        ?>
        <tr> 
          <th>Grand Total</th>
      <td></td>
          <th>
          <?php echo $b;?>        
      </th>
      <th>
      <?php echo $a;?>
      </th>
      
       <th onclick= window.location.href="checkout.php?checkout=<?php echo$username;?>">
      <button class="c_out">Checkout</button></th>
      </tr>
        </table>
		<?php
}	

if(isset($_REQUEST['del_id'])){
  $idd= $_REQUEST['del_id'];
  mysqli_query($x,"delete from orders where id='$idd'") or die(mysqli_error($x));
header("location:cart.php?cart");   
}

?>

</div>
</div>
</div>
<?php 
include('footer.php');
?>