<?php include 'inc/header.php';?>
<?php 
	$login = Session::get("cmrlogin");
	if ($login == false) {
		header("Location: login.php");
	}
?>

 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="order">
    			<h2><span>Order Page</span></h2>
    		</div>

    	</div> 	
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'inc/footer.php';?>