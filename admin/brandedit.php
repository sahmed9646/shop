<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>

<?php
if (!isset($_GET['brandid']) || $_GET['brandid'] == null) {
    echo "<script>window.location='brandlist.php';</script>";
}else{
    $id = $_GET['brandid'];
}
    $brand = new brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $brandName = $_POST['brandName'];
        $updateBrand = $brand->brandUpdate($brandName, $id);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Brands</h2>
               <div class="block copyblock"> 

                <?php 
                    if (isset($updateBrand)) {
                        echo $updateBrand;
                    }
                ?>

                <?php
                    $getbrand = $brand->getBrandById($id);
                    if ($getbrand) {
                        while ($result=$getbrand->fetch_assoc()) {
                 ?>

                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" value="<?php echo $result['brandName']; ?>"placeholder="Enter Brand Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                            <td>
                                <a href="..\admin\brandlist.php" style="color:blue;font-weight:italic;">show brands</a>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?PHP } } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>