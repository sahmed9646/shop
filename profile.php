<?php include 'inc/header.php';?>

<?php 
	$login = Session::get("cmrlogin");
	if ($login == false) {
		header("Location: login.php");
	}
?>

<style>
    .tblone{
        width:550px;
        margin:0 auto;
        border: 3px solid #ddd;
    }
    .tblone tr td{
        text-align: justify;
    }
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
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
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'inc/footer.php';?>