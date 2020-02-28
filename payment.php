<?php include 'inc/header.php';?>

<?php 
	$login = Session::get("cmrlogin");
	if ($login == false) {
		header("Location: login.php");
	}
?>

<style>
  .payment{width: 500px; min-height: 200px; text-align: center;border: 1px solid #ddd;margin: 0 auto;padding: 50px;}
  .payment h2{border-bottom: 1px solid #ddd; margin-bottom: 50px; padding-bottom: 10px;}
  .payment a{background: #ff0000; color: #fff; border-radius: 4px; padding: 6px 30px; font-size: 25px;}
  .back{}
  .back a{
    width: 180px;
     text-align: center;
     display: block;
    margin: 5px auto 0;
    padding: 7px;
    background: #555;
    border: 1px solid #333;
    border-radius: 3px;
    color: #ddd;
  }
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
            <div class="payment">
                <h2>Choose Your Payment Option</h2>
                <a href="offline.php">Offline Payment</a>
                <a href="online.php">Online Payment</a>
            </div>
            <div class="back">
                <a href="cart.php">Previous</a>
            </div>
    	</div> 	
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'inc/footer.php';?>