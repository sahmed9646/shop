<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php';?>

<?php

	if (!isset($_GET['proid']) || $_GET['proid'] == null) {
    echo "<script>window.location='productlist.php';</script>";
	}else{
    $id = $_GET['proid'];
	}

    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $updateProduct = $pd->productUpdate($_POST, $_FILES, $id);
    }
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Existing Product</h2>
        <div class="block">  
        <?php 
        if (isset($updateProduct)) {
            echo $updateProduct;
        }
        ?>  

        <?php 
        	$getProduct = $pd->getProductById($id);
        	if ($getProduct) {
        		while ($values = $getProduct->fetch_assoc()) {
        	
        ?>           
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="productName" value="<?php echo $values['productName'];?>" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="catId">
                            <option>Select Category</option>
                            <?php
                                $cat = new category();
                                $getcat = $cat->getAllCat();
                                if ($getcat) {
                                   while ($result = $getcat->fetch_assoc()) {
                                
                            ?>
                            <option 
                            <?php 
                            	if ($values['catId'] == $result['catId']) { ?>
                            		selected = "selected";
                             	<?php } ?>
                            value="<?php echo $result['catId'];?>">
                            	<?php echo $result['catName'];?>
                            </option>
                            <?php } } ?>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Brand</label>
                    </td>
                    <td>
                        <select id="select" name="brandId">
                            <option>Select Brand</option>
                            <?php 
                                $brand = new brand();
                                $getbrand = $brand->getAllBrand();
                                if ($getbrand) {
                                    while ($result = $getbrand->fetch_assoc()) {
                                  
                            ?>
                            <option 
	                             <?php 
	                            	if ($values['brandId'] == $result['brandId']) { ?>
                            		selected = "selected"
                             		<?php } ?>
                           		 value="<?php echo $result['brandId']; ?>"><?php echo $result['brandName']; ?>
                        	</option>
                            <?php } } ?>
                         </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea 
                       		 class="tinymce" name="body">
                        	<?php echo $values['body'];?>
                   		 </textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo $values['price'];?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                    	<img src="<?php echo $values['image'];?>" height="80px" width="200px"><br />
                        <input type="file" name="image"/>
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Select Type</option>
                            <?php 
                            if ($values['type']==0) { ?>
                            	<option selected="selected" value="0">Featured</option>
                            	<option value="1">Non-Featured</option>
                           <?php }else{ ?> 
                           	
                            <option selected="selected" value="1">Non-Featured</option>
                            <option value="0">Featured</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php } } ?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


