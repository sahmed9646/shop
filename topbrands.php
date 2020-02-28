<?php include 'inc/header.php';?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>POLO</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<?php 
					$getBrand = $pd->latestBrandsPolo();
					if ($getBrand) {
						while ($result = $getBrand->fetch_assoc()) {	
				?>
				<div class="grid_1_of_4 images_1_of_4" style="height:370px">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img height="200px" src="admin/<?php echo $result['image'];?>" alt="" /></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60);?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>	
			   <?php } } ?>
			</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>lotto</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
					$getBrand = $pd->latestBrandsLotto();
					if ($getBrand) {
						while ($result = $getBrand->fetch_assoc()) {
					
				?>
				<div class="grid_1_of_4 images_1_of_4" style="height:370px">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img height="200px" src="admin/<?php echo $result['image'];?>" alt="" /></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60);?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>	
			   <?php } } ?>

			</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>armani</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
					$getBrand = $pd->latestBrandsArmani();
					if ($getBrand) {
						while ($result = $getBrand->fetch_assoc()) {
					
				?>
				<div class="grid_1_of_4 images_1_of_4" style="height:370px">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img height="200px" src="admin/<?php echo $result['image'];?>" alt="" /></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60);?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>	
			   <?php } } ?>

			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>lacoste</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
					$getBrand = $pd->latestBrandsLacoste();
					if ($getBrand) {
						while ($result = $getBrand->fetch_assoc()) {
					
				?>
				<div class="grid_1_of_4 images_1_of_4" style="height:370px">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img height="200px" src="admin/<?php echo $result['image'];?>" alt="" /></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60);?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>	
			   <?php } } ?>

			</div>


    </div>
 </div>
<?php include 'inc/footer.php';?>