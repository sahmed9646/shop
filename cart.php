<?php include 'inc/header.php';?>
<?php 
	if (isset($_GET['delpro'])) {
		$id = $_GET['delpro'];
		$delProduct = $cart->deleteProductByCart($id);
	}

	if ($_SERVER['REQUEST_METHOD']== 'POST') {
 		$cartId = $_POST['cartId'];
 		$quantity = $_POST['quantity'];
 		$updateCart = $cart->updateCartQuantity($quantity, $cartId);

 		if ($quantity <= 0) {
 			$delProduct = $cart->deleteProductByCart($cartId);
 		}
 	}

 	//for refresh a page
 	if (!isset($_GET['id'])) {
 		echo "<meta http-equiv='refresh' content='0;URL=?id=live' />";
 	}
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
			    	<?php 
			    		if (isset($updateCart)) {
			    			echo $updateCart;
			    		}
			    		if (isset($delProduct)) {
			    			echo $delProduct;
			    		}
			    	?>
						<table class="tblone">
							<tr>
								<th width="5%">SL</th>
								<th width="30%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="15%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<?php 
								$getCpro= $cart->getCartProduct();
								if ($getCpro) {
									$i=0;
									$sum=0;
									$quantity = 0;
									while ($result = $getCpro->fetch_assoc()) {
										$i++;
							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName']; ?></td>
								<td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
								<td>$<?php echo $result['price']; ?></td>
						<td>
							<form action="" method="post">
								<input type="hidden" name="cartId" value="<?php echo $result['cartId']; ?>"/>
								<input type="number" name="quantity" value="<?php echo $result['quantity']; ?>"/>
								<input type="submit" name="submit" value="Update"/>
							</form>
						</td>
								<td>$
									<?php 
									$totalPrice = $result['price']*$result['quantity'];
									echo $totalPrice; ?></td>
								<td><a onclick="return confirm('Are you sure to delete');" href="?delpro=<?php echo $result['cartId'];?>">X</a></td>
							</tr>
							<?php 
								$sum=$sum+$totalPrice;
								$quantity = $quantity+$result['quantity'];
								Session::set("sum", $sum);
								Session::set("quantity", $quantity);
							 ?>
							<?php } } ?>
						</table>
						<?php 
						$getData = $cart->checkCartTable();
						if ($getData) {
						?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td>$<?php 
									echo $sum;
								?></td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10%</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td>$<?php 
									$vat = $sum*0.1;
									$gtotal = $sum+$vat;
									echo $gtotal;
								?></td>
							</tr>
					   </table>
					   <?php } else{
					   //	echo "Please shop now";
					   	header("Location: index.php");
					   }?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'inc/footer.php';?>