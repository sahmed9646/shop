<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';?>

<?php
if (!isset($_GET['catid']) || $_GET['catid'] == null) {
    echo "<script>window.location='catlist.php';</script>";
}else{
    $id = $_GET['catid'];
}
    $cat = new category();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $catName = $_POST['catName'];
        $updateCat = $cat->catUpdate($catName, $id);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock"> 

                <?php 
                    if (isset($updateCat)) {
                        echo $updateCat;
                    }
                ?>

                <?php
                    $getCat = $cat->getCatById($id);
                    if ($getCat) {
                        while ($result=$getCat->fetch_assoc()) {
                 ?>

                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName" value="<?php echo $result['catName']; ?>"placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                            <td>
                                <a href="..\admin\catlist.php" style="color:blue;font-weight:italic;">show category</a>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?PHP } } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>