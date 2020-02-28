<?php include 'inc/header.php';?>

<?php 
	$login = Session::get("cmrlogin");
	if ($login == false) {
		header("Location: login.php");
	}
?>
<?php
  if (isset($_GET['orderId']) && $_GET['orderId']=='order') {
      $cmrId = Session::get("cmrid");
      $insertOrder = $cart->orderProduct($cmrId);
      $delData = $cmr->deleteCartData();
      header("Location:success.php");
  }
?>

<style>
  .division{
    width: 50%;
    float: left;
  }
  .tblone{
        width:500px;
        margin:0 auto;
        border: 3px solid #ddd;
    }
    .tblone tr td{
        text-align: justify;
    }
  .tbltwo{
      width: 60%;
      margin-right: 18px;
      margin-top: 14px;
      float: right;
      text-align: left;
      border: 2px dashed #000;
    }
    .tbltwo tr td{
        text-align: justify;
        padding: 5px 10px;
    }
    .ordernow{padding-bottom: 10px;}
    .ordernow a{
      width: 200px;
      text-align: center;
      margin: 20px auto 0;
      display: block;
      padding: 5px;
      background: #ff0000;
      color: #fff;
      border-radius: 4px;
      font-size: 18px;
    }
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
          <div class="division">
            <table class="tblone">
              <tr>
                <th>No</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
               
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
                <td>$<?php echo $result['price']; ?></td>
                <td><?php echo $result['quantity']; ?></td>
                <td>$
                  <?php 
                  $totalPrice = $result['price']*$result['quantity'];
                  echo $totalPrice; ?></td>
                 
              </tr>
              <?php 
                $sum=$sum+$totalPrice;
                $quantity = $quantity+$result['quantity'];
                
               ?>
              <?php } } ?>
            </table>
            
            <table class="tbltwo">
              <tr>
                <td>Sub Total</td>
                <td>:</td>
                <td>$<?php 
                  echo $sum;
                ?></td>
              </tr>
              <tr>
                <td>VAT</td>
                <td>:</td>
                <td>10%($<?php echo $vat = $sum*0.1;?>)</td>
              </tr>
              <tr>
                <td>Grand Total</td>
                <td>:</td>
                <td>$<?php 
                  $vat = $sum*0.1;
                  $gtotal = $sum+$vat;
                  echo $gtotal;
                ?></td>
              </tr>
              <tr>
                <td>Quantity</td>
                <td>:</td>
                <td><?php 
                  echo $quantity; 
                ?></td>
              </tr>
             </table>
            </div>
            <div class="division">
                <?php 
                  $id = Session::get("cmrid");
                  $getData = $cmr->getCustomerData($id);
                  if ($getData) {
                      while ($result = $getData->fetch_assoc()) {
                   
                 ?>
              <table class="tblone">
                <tr>
                    <td colspan="3"><h2>Your profile details</h2></td>
                 </tr>
                <tr>
                    <td width="20%" >Name</td>
                    <td width="5%" >:</td>
                    <td><?php echo $result['name']; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $result['phone']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $result['email']; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><?php echo $result['address']; ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>:</td>
                    <td><?php echo $result['city']; ?></td>
                </tr>
                <tr>
                    <td>Zip</td>
                    <td>:</td>
                    <td><?php echo $result['zip']; ?></td>
                </tr>
               
                <tr>
                    <td>Country</td>
                    <td>:</td>
                    <td><?php echo $result['country']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="editcustomerprofile.php">Update Your Profile</a></td>
                </tr>
              </table>   
               <?php } } ?>
            </div>
    	</div> 	
       <div class="clear"></div>
    </div>
    <div class="ordernow"><a href="?orderId=order">Order</a></div>
 </div>
 <?php include 'inc/footer.php';?>