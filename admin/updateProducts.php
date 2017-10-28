<?php
include_once '../includes/header.php';
include_once '../database/connect.php';
if(isset($_GET['edit_pro']))
{
	$pid = $_GET['edit_pro'];
	$sql = "SELECT * FROM products WHERE id=$pid";
	$peditresult = mysqli_query($con, $sql);
	$value = mysqli_fetch_assoc($peditresult);
}

if (isset($_POST['update'])){
	$name = $_POST['name'];
	$qnt = $_POST['quantity'];
	$prc = $_POST['price'];
	$dsc = $_POST['description'];
	$sql2 = "UPDATE products SET name='$name', price='$prc', quantity='$qnt', description='$dsc' WHERE id='$pid'";
	$uresult = mysqli_query($con, $sql2);

	if ($uresult)
		header("Location:manageProduct.php");
}
?>
<body>
	<div class="panel col-md-5 col-md-offset-4" style="border-top: outset; border-left: outset;
    border-bottom: inset; border-right: inset; margin-top: 50px;">

    <div class="panel-heading" align="center">
        <h3>Edit product</h3>
    </div>
    <div class="panel-body" >
        <form action="" method="post" class="form-horizontal" >
            <div class="form-group" >
                <label for="name" class="col-md-2 control-label">Name</label>
                <div class="col-md-8" align="center">
                    <input id="name" type="text" name="name" value="<?php echo $value['name']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-md-2 control-label">Price</label>
                <div class="col-md-8">
                    <input id="price" name="price" value="<?php echo $value['price']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="quantity" class="col-md-2 control-label">Quantity</label>
                <div class="col-md-8">
                    <input id="quantity" name="quantity" value="<?php echo $value['quantity']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-md-2 control-label">Description</label>
                <div class="col-md-8">
                    <input id="description" name="description" value="<?php echo $value['description']; ?>" class="form-control">
                </div>
            <div align="center">
                <input type="submit" name="update" id="btnUpdate" value="Update" class="btn btn-primary"
                onclick="" />
            </div>
        </form>
    </div>
</div>
<div>
    <br><br><br>
</div>
<div class="navbar navbar-fixed-bottom" style="background:  #ebebe0;float: none;display: inline-block;text-align: center;"> 
    <div class="container">
            <div class="navbar-text center" style="float: none;">
            <p>&copy; Walton Bangladesh Limited 2017</p>
        </div>
    </div>
</div>
</body>
</html>