<div class="header-img">
<img src="images/hero.jpg" height="440px" width="100%" />
<div class="centered">
<p id="sell">Sell or Advertise anything online with classyMARKET</p>
<p id="join" >Join the millions who buy and sell from each other
everyday in local communities around the country</p>
</div>
<div class="search-header">
	<div class="maptypes">
		<input type="text" name="splace" placeholder=" All India" id="stext_one"  /></div>
			<div id="map_main">
				<div class="li_one">
				<ul style="none">
				<li id="pb_style" onmouseover="district">Punjab
			</li>
				<li>Haryana</li>
				<li>Goa</li>
				<li>Gujarat</li>
				<li>Assam</li>
				<li>Bihar</li>
				<li>Jammu & Kashmir</li>
				<li>Rajashtan</li>
				</div>
				<div class="li_two">   
				<li>Mumbai</li>
				<li>Tamil Nadu</li>
				<li>Tripura </li>
				<li>Uttar Pradesh</li>
				<li>Nagaland</li>
				<li>Orissa</li>
				<li>Mizoram</li>
				<li>Manipur</li>
				</div>
				<div class="li_three">   
				<li>Himachal Pradesh</li>
				<li>Jharkhand</li>
				<li>Sikkim</li>
				<li>West Bengal</li>
				<li>Odisha</li>
				<li>Telangana</li>
				<li>West Bengal</li>
				</ul>
				</div>
				
				</div>
		<div class="search_box">
				<input type="submit" value="Search" name="submit" id="ssubmit-button"></div>
				<div class="districts">
				<ul>
				<li>Patiala</li>
				<li>Bathinda</li>
				<li>Mansa</li>
				<li>Sangrur</li>
				<li>Amritsar</li>
				</ul>
				</div>
				</div>
</div>

<div class="blank_after_search">
</div>
<div class="images_category" id="chng">
<?php
	include("conn_cm.php");
    $f=mysqli_query($x,'select * from category_table ');
    while( $ff= mysqli_fetch_array($f))
    {
      ?>
		 <div class="img_particular">
		 
		<?php 
		
		echo "<a href='viewproduct.php?cid=$ff[0]'>"."<img src='images/$ff[image]' height='100px' width='80%'  />"."</a>";  ?>
		<div class="name_category">
		<p>
		<?php echo "$ff[category_name]";?>
		</p>
		</div>
		</div>
          <?php 
	}
?>

</div>
</body>
</html>