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
					<h2><?php echo $value['price']; ?><i class="icofont icofont-cur-taka"></i></h2>
					<h4><strong>Quantity: </strong><?php echo $value['quantity']; ?></h4>
					<p><strong>About: </strong><?php if ($value['description'] == null){echo 'Sorry! No description for this product.';} else {echo $value['description'];}?></p>
					<p><a class="nounderline" onclick="show()" style="text-decoration: none !important;">Give Feedback about this product</a></p>
					<div class="form-group hidden" id="feedback">
						<label for="comment">Feedback:</label>
						<textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
					</div>
					<script>
						function show() {
							var x = document.getElementById("feedback");
							if (x.className == 'hidden') {
								x.className = "unhidden";
							} else {
								x.className = "hidden";
							}
						}
					</script>
				</div>
				<?php }
		}
		?>
	</div>
	<div class="container-fluid">
		<div class="col-md-4 col-md-offset-2" align="center">
			<a class="nounderline" style="text-decoration: none" href="#">Add to Wishlist <span class="glyphicon glyphicon-heart"></span></a>
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