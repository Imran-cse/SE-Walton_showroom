<?php include'../includes/header.php'; ?>

<body  style="font-family: Open Sans">
	<div class="container" align="center">
		<h3>Mobile Zone</h3>
	</div>	
	<div class="container">
		<div class="row">
			<?php
			$cid = $_GET['category_id'];
			if(isset($_GET['category_id']))
			{
				include_once '../database/connect.php';
			$sql = "SELECT * FROM products where category_id=$cid";
			$result = mysqli_query($con, $sql);
			while ($value = mysqli_fetch_assoc($result)) { 
				
				?>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="../views/description.php?category_id=<?php echo $value['category_id'];?>&&product_id=<?php echo $value['id']; ?>" target="_self">
							<img src="../resources/images/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" style="width:256px;height:256px;">
							<div class="caption" align="center">
								<p><?php echo $value['name']; ?></p>
							</div>
						</a>
					</div>
				</div>
				<?php }
			}
			?>

		<!--	<div class="col-md-4">
				<div class="thumbnail">
					<a href="../resources/images/walton-primo-r4s.jpg" target="_blank">
						<img src="../resources/images/walton-primo-r4s.jpg" alt="Walton Primo R4S" style="width:256px;height:256px;">
						<div class="caption" align="center">
							<p>Walton Primo R4S</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="../resources/images/walton-primo-zx.jpg" target="_blank">
						<img src="../resources/images/walton-primo-zx.jpg" alt="Walton Primo ZX" style="width:256px;height:256px;">
						<div class="caption" align="center"> 
							<p>Walton Primo ZX</p>
						</div>
					</a>
				</div>
			</div> -->
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