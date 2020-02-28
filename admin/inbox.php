<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'/../classes/Cart.php');
	$cart = new Cart();
	$fm = new Format();
?>

<?php 
	if (isset($_GET['shiftid'])) {
		$id = $_GET['shiftid'];
		$time = $_GET['date'];
		$price = $_GET['price'];

		$shiftedPro = $cart->productShifted($id, $time, $price);
	}
	if (isset($_GET['delShiftId'])) {
		$id = $_GET['delShiftId'];
		$time = $_GET['date'];
		$price = $_GET['price'];

		$delShiftPro = $cart->deleteShiftedProduct($id, $time, $price);
	}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Order</h2>
                <div class="block">  
                <?php 
                	if (isset($shiftedPro)) {
                		echo $shiftedPro;
                	}
                	if (isset($delShiftPro)) {
                		echo $delShiftPro;
                	}
                ?>      
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>ID</th>
							<th>Date & Time</th>
							<th>Product</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>CustomerId</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$getOrder = $cart->getAllOrderProduct();

						if ($getOrder) {
							while ($result = $getOrder->fetch_assoc()) {
						
					?>
						<tr class="odd gradeX">
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $fm->formatDate($result['date']); ?></td>
							<td><?php echo $result['productName']; ?></td>
							<td><?php echo $result['quantity']; ?></td>
							<td><?php echo $result['price']; ?></td>
							<td><?php echo $result['cmrId']; ?></td>
							<td><a href="customer.php?customerId=<?php echo $result['cmrId']; ?>">view Details</a></td>
							<?php if ($result['status']=='0') { ?>
								<td><a href="?shiftid=<?php echo $result['cmrId']; ?> &price=<?php echo $result['price']; ?>&date=<?php echo $result['date']; ?>">Shifted</a></td>
							<?php } elseif ($result['status']=='1'){ ?>
								<td>pending</td>
							<?php } elseif ($result['status']=='2'){?>	
								<td><a href="?delShiftId=<?php echo $result['cmrId']; ?> &price=<?php echo $result['price']; ?>&date=<?php echo $result['date']; ?>">Remove</a></td>
							<?php } ?>	
						</tr>
						<?php } } ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
