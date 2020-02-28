<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Customer.php';?>

<?php
if (!isset($_GET['customerId']) || $_GET['customerId'] == null) {
    echo "<script>window.location='inbox.php';</script>";
}else{
    $id = $_GET['customerId'];
}
    $cmr = new Customer();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     echo "<script>window.location='inbox.php';</script>";
        }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Customer Details</h2>
               <div class="block copyblock"> 

                <?php
                    $getCmrData = $cmr->getCustomerData($id);
                    if ($getCmrData) {
                        while ($result=$getCmrData->fetch_assoc()) {
                 ?>

                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>Name : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Address : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['address']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>City : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['city']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Country : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['country']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['phone']; ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>Zip : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['zip']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr>


						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Ok" />
                            </td>
                            
                        </tr>
                    </table>
                    </form>
                    <?PHP } } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>