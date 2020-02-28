<?php include 'inc/header.php';?>
<?php 
	
if (isset($_GET['wishid'])) {
	$cmrId = Session::get("cmrid");
}
 	//for refresh a page
 	if (!isset($_GET['id'])) {
 		echo "<meta http-equiv='refresh' content='0;URL=?id=live' />";
 	}

 	if (isset($_GET['delWpro'])) {
 		$productId = $_GET['delWpro'];
 		$delWproduct = $pd->deleteFromWish($productId, $cmrId);
 	}
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2> WishList</h2>
			    	
						<table class="tblone">
							<tr>
								<th width="5%">SL</th>
								<th width="30%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="10%">Action</th>
							</tr>
							<?php 
								$getWpro= $pd->getWlistProduct($cmrId);
								if ($getWpro) {
									$i=0;
									while ($result = $getWpro->fetch_assoc()) {
										$i++;
							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName']; ?></td>
								<td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
								<td>$<?php echo $result['price']; ?></td>
								<td>
								<a href="details.php?proid=<?php echo $result['productId'];?>">buy</a> ||
								<a onclick="return confirm('Are you sure to delete');" href="?delWpro=<?php echo $result['productId'];?>">X</a></td>
							</tr>
							<?php } } ?>
						</table>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'inc/footer.php';?>