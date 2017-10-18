<?php
include "../includes/header.php"; 
?>
<body style="font-family: Open Sans Light">
	<div class="container-fluid">
		<?php
		$cid = $_GET['category_id'];
		$id = $_GET['product_id'];
		if (isset($_GET['category_id'])&&isset($_GET['product_id']))
		{
			include_once '../database/connect.php';
			$sql = "SELECT * FROM products where category_id=$cid AND id=$id";
			$result = mysqli_query($con, $sql);
			while ($value = mysqli_fetch_assoc($result)) { 
				?>
				<div class="col-md-4 col-md-offset-2" align="center">
					<div class="thumbnail">
						<a href="../resources/images/<?php echo $value['image']; ?>" target="_blank">
							<img src="../resources/images/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" style="width:350px;height:350px;">
						</a>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<!-- <p><strong>Name: </strong></p> -->
					<h2><?php echo $value['name']; ?></h2>
					<h2><?php echo $value['price']; ?><i class="icofont" >&#xeae6;</i></h2>
					<h4><strong>Quantity: </strong><?php echo $value['quantity']; ?></h4>
					<p><strong>About: </strong><?php if ($value['description'] == null){echo 'Sorry! No description for this product.';} ?></p>
				</div>
				<?php }
		}
		?>
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