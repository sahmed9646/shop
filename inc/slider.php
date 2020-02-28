

<style>
	.slideImg{
		height:300px;
		width:300px;
	}
</style>
	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php 
					$getBrand = $pd->latestFromLotto();
					if ($getBrand) {
						while ($data = $getBrand->fetch_assoc()) {
					
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $data['productId'];?>"> <img src="admin/<?php echo $data['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Lotto</h2>
						<p><?php echo $data['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $data['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php } } ?>

				<?php 
					$getBrand = $pd->latestFromPolo();
					if ($getBrand) {
						while ($data = $getBrand->fetch_assoc()) {
					
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $data['productId'];?>"> <img src="admin/<?php echo $data['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>polo</h2>
						<p><?php echo $data['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $data['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php } } ?>

			</div>
			<div class="section group">

				<?php 
					$getBrand = $pd->latestFromLacoste();
					if ($getBrand) {
						while ($data = $getBrand->fetch_assoc()) {
					
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $data['productId'];?>"> <img src="admin/<?php echo $data['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>lacoste</h2>
						<p><?php echo $data['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $data['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php } } ?>	

				<?php 
					$getBrand = $pd->latestFromArmani();
					if ($getBrand) {
						while ($data = $getBrand->fetch_assoc()) {
					
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $data['productId'];?>"> <img src="admin/<?php echo $data['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>armani</h2>
						<p><?php echo $data['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $data['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php } } ?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1vfullsleeve.jpg" class="slideImg" alt=""/></li>
						<li><img src="images/formalshirt1.jpg" class="slideImg" alt=""/></li>
						<li><img src="images/polotshirt4.jpg" class="slideImg" alt=""/></li>
						<li><img src="images/polotshirt2.jpg" class="slideImg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>