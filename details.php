 <?php include 'inc/header.php';?>

 <?php 
 	if (!isset($_GET['proid']) || $_GET['proid']== null ) {
 		echo "<script>window.location='404.php';</script>";
 	}else{
 		$id = $_GET['proid'];
 	}

 	if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])) {
 		$quantity = $_POST['quantity'];
 		$addCart = $cart->addToCart($quantity, $id);
 	}
?>
<?php
 	if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['wlist'])) {
 	 	$cmrId = Session::get("cmrid");
 	 	$addWish = $pd->addToWishlist($id, $cmrId);
 	}

 	
 ?>





 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">	
				<?php 
					$getSPd = $pd->getSingleProduct($id);
					if ($getSPd) {
						while ($result = $getSPd->fetch_assoc()) {
					
				?>			
					<div class="grid images_3_of_2">
						<img src="admin/<?php echo $result['image'];?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result['productName'];?></h2>
								
					<div class="price">
						<p>Price: <span>$<?php echo $result['price'];?></span></p>
						<p>Category: <span><?php echo $result['catName'];?></span></p>
						<p>Brand:<span><?php echo $result['brandName'];?></span></p>
					</div>
				<div class="add-cart">
					<div class="myButton">
						<form action="" method="post">
							<input type="number" class="buyfield" name="quantity" value="1"/>
							<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
						</form>
					</div>
				</div>			
					<span style="color:red; font-size:18px">
						<?php if (isset($addCart)) {
							echo $addCart;
						}?>
					</span>	
					<div class="clear"></div>

					<?php
					$login = Session::get("cmrlogin"); 
					if ($login == true) {
					?>
							<form action="" method="post">
								<a href="?wishid=<?php echo $result['productId'];?>" ><input type="submit" class="buysubmit" name="wlist" value="Add To WishList"/></a>
							</form>
					<?php } ?>
					<span style="color:red; font-size:18px">
						<?php if (isset($addWish)) {
							echo $addWish;
						
						}?>
					</span>	

				
			</div>
			<div class="product-desc">
			<h2>Product Details</h2>
			<p><?php echo $result['body'];?></p>
	    </div>
		<?php } } ?>		
	</div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php 
							$getCat = $cat->getAllCat();
							if ($getCat) {
								while ($result = $getCat->fetch_assoc()) {
							
							?>
				      <li><a href="productbycat.php?catId=<?php echo $result['catId'];?>"><?php echo $result['catName'];?></a></li>
				      <?php } } ?>
    				</ul>
    	
 				</div>
 		</div>
 	</div>
</div>
<?php include 'inc/footer.php';?>