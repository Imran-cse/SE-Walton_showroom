<?php
include_once '../includes/header.php';
include_once '../database/connect.php';

if (isset($_POST['submit'])) {
	//This is the directory where images will be saved 
	 $target = "../resources/images/"; 
	 $target = $target . basename( $_FILES['image']['name']); 
	 
	 //This retrieves all the other information from the form 
	 $name = $_POST['txtProductName']; 
	 $category = $_POST['category']; 
	 $price = $_POST['txtPrice'];
	 $quantity = $_POST['txtQuantity'];
	 $description = $_POST['txtDescription'];
	 $img = ($_FILES['image']['name']); 
	 
	 //Writes the information to the database 
    $sql = "INSERT INTO products(category_id, name, price, image, quantity, description) VALUES('$category', '$name', '$price', '$img', '$quantity', '$description')";
     mysqli_query($con, $sql);
	 //Writes the photo to the server 
	 if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
	 { 
	 
	 //Tells you if it is all ok 
	 echo "The file ". basename( $_FILES['image']['name']). " has been uploaded, and your information has been added to the directory"; 
	 } 
	 else { 
	 
	 //Gives an error if it is not ok 
	 echo "Sorry, there was a problem uploading your file."; 
	 } 
}
?>
<body>
	<div class="panel panel-default col-md-5 col-md-offset-4">
		<div class="panel-heading">
			<h4>Add New Product</h4>
		</div>
		<div class="panel-body">
			<form action="controlPanel.php" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="form-group"> 
					<label for="txtProductName" class="col-md-2 control-label">Name</label>
	                <div class="col-md-8">
	                    <input id="txtProductName" type="text" name="txtProductName" value="" class="form-control" required>
	                </div>
	            </div>
	            <div class="form-group">
	            	<label for="category" class="col-md-2 control-label">category</label>
	            	<div class="col-md-8">
                        <?php
                        include_once '../database/connect.php';
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($con, $sql);
                        $var = '<select name="category" class="form-control" id="category">';

                            while ($value = mysqli_fetch_assoc($result)) {

                                $var = $var. '<option value="'.$value['id'].'"';

                                $var = $var.'>'.$value['name'].'</option>';

                            }

                            $var = $var.'</select>';
                        echo $var;
                        mysqli_free_result($result);
                        ?>
                    </div>
	            </div>
    			<div class="form-group"> 
					<label for="image" class="col-md-2 control-label">Image</label>
	                <div class="col-md-8">
						<input type="file" name="image" class="form-control">
	                </div>
	            </div>
				<div class="form-group"> 
					<label for="txtPrice" class="col-md-2 control-label">Price</label>
	                <div class="col-md-8">
	                    <input id="txtPrice" type="text" name="txtPrice" value="" class="form-control" required>
	                </div>
	            </div>
				<div class="form-group"> 
					<label for="txtQuantity" class="col-md-2 control-label">Quantity</label>
	                <div class="col-md-8">
	                    <input id="txtQuantity" type="number" name="txtQuantity" value="" class="form-control" required>
	                </div>
	            </div>
                <div class="form-group">
                    <label for="txtdescription" class="col-md-2 control-label">Description</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="txtDescription" id="txtDescription" placeholder="Type Description.."></textarea>
                    </div>
                </div>
                <div align="center">
                    <input type="submit" name="submit" id="btnProduct" value="Add" class="btn btn-primary"/>
                </div>
			</form>
		</div>
	</div>
</body>