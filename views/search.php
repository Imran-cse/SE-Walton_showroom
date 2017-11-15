<?php
include "../includes/header.php";
?>
<body>
	<div class="container" align="center">
		<h3>Search Results</h3>
	</div>	
	<div class="container">
		<div class="row">
			<?php
			if(isset($_POST['search'])){
				$search = $_POST['search'];
				if ($search!=null)
				{
					include_once '../database/connect.php';
					$sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
					$result = mysqli_query($con, $sql);
					if ($result){
						while ($value = mysqli_fetch_assoc($result)){ ?>
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
					elseif (empty($result)) echo "Try Different Keyword";
				}
				else echo "Please Enter Some Text";
			}?>
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