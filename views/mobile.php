<?php include'../includes/header.php'; ?>

<body>
	<div class="container" align="center">
		<h3>Mobile Zone</h3>
	</div>	
	<div class="container">
		<div class="row">
			<?php
			include_once '../database/connect.php';
			$sql = "SELECT * FROM products";
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
</body>