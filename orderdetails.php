<style type="text/css">
    .tblone{
        text-align: justify;
    }
</style>

<?php include 'inc/header.php';?>
<?php 
	$login = Session::get("cmrlogin");
	if ($login == false) {
		header("Location: login.php");
	}
?>
<?php 
    if (isset($_GET['customrid'])) {
        $id = $_GET['customrid'];
        $time = $_GET['date'];
        $price = $_GET['price'];

        $confirm = $cart->productShiftConfirm($id, $time, $price);
    }

    if (isset($_GET['delcmrid'])) {
        $id = $_GET['delcmrid'];
        $time = $_GET['date'];
        $price = $_GET['price'];

        $delShiftPro = $cart->deleteShiftedProductBycustomer($id, $time, $price);
    }

  ?>       

 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="order">
    			<h2><span>Your Ordered Details </span></h2>
                <table class="tblone">
                    <tr>
                        <th>SL</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        $cmrId = Session::get("cmrid");
                        $getorder= $cart->getOrderedProduct($cmrId);
                        if ($getorder) {
                            $i=0;
                            while ($result = $getorder->fetch_assoc()) {
                             $i++;
                    ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['productName']; ?></td>
                        <td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
                        <td><?php echo $result['quantity']; ?></td>
                
                        <td>$ <?php echo $result['price']; ?></td>
                        
                        <td><?php echo $fm->formatDate($result['date']); ?></td>
                        <td>
                            <?php
                                if ($result['status']=='0') {
                                   echo "Pending";
                                }elseif ($result['status']=='1') {
                                     echo "got product?";
                                }else{ 
                                    echo "ok";
                                }
                            ?>
                         </td>
                        
                        <?php 
                        if ($result['status']=='1') { ?>
                         <td><a href="?customrid=<?php echo $result['cmrId']; ?> &price=<?php echo $result['price']; ?>&date=<?php echo $result['date']; ?>">Yes!</a></td>
                           <?php }elseif($result['status']=='2'){ ?>
                          <td><a href="?delcmrid=<?php echo $result['cmrId']; ?> &price=<?php echo $result['price']; ?>&date=<?php echo $result['date']; ?>">X</a></td>
                          <?php } elseif($result['status']=='0'){?>
                          <td>N/A</td>
                          <?php } ?>
                    </tr>
                    <?php } } ?>
                </table>
    		</div>

    	</div> 	
       <div class="clear"></div> 
    </div>
 </div>
 <?php include 'inc/footer.php';?>