<?php include'../includes/header.php'; ?>
<body>
	<div class="container" align="center">
		<h3>Laptop</h3>
	</div>	
	<div class="container">
		<div class="row">
		<?php
			include_once '../database/connect.php';
			$sql = "SELECT * FROM products where category_id=4";
			$result = mysqli_query($con, $sql);
				while ($value = mysqli_fetch_assoc($result)) { 
				
			 ?>
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="../resources/images/<?php echo $value['image']; ?>" target="_blank">
						<img src="../resources/images/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" style="width:256px;height:256px;">
						<div class="caption" align="center">
							<p><?php echo $value['name']." (".$value['quantity'].")"; ?></p>
						</div>
					</a>
				</div>
			</div>
			<?php } ?>
		</div>
</body>