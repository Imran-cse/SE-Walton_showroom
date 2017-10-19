<?php
include "../includes/header.php";
include_once "../database/connect.php";

if (isset($_POST['save'])){
    $u_id = $_SESSION['u_id'];
    $p_id = $_GET['product_id'];
    $fd = $_POST['feed'];

    $sql = "INSERT INTO feedback(user_id, product_id, feedback) VALUES ('$u_id', '$p_id', '$fd')";
    $f_res = mysqli_query($con, $sql);
}

?>
<body style="font-family: Open Sans Light">
	<div class="container-fluid">
        <form action="" method="post">
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
                        <a class="nounderline" style="text-decoration: none" href="#">Add to Wishlist <span class="glyphicon glyphicon-heart"></span></a>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<!-- <p><strong>Name: </strong></p> -->
					<h2><?php echo $value['name']; ?></h2>
					<h2><?php echo $value['price']; ?><i class="icofont" >&#xeae6;</i></h2>
					<h4><strong>Quantity: </strong><?php echo $value['quantity']; ?></h4>
					<p><strong>About: </strong><?php if ($value['description'] == null){echo 'Sorry! No description for this product.';} else {echo $value['description'];}?></p>
					<p><a class="nounderline" onclick="show()" style="text-decoration: none !important;">Give Feedback about this product</a></p>
					<script>
						function show() {
							var x = document.getElementById("feedback");
							if (x.className == "unhidden") {
								x.className = "hidden";
							} else {
								x.className = "unhidden";
							}
						}
					</script>
                    <?php if (isset($_SESSION['user_id'])){ ?>
					<div class="form-group hidden" id="feedback">
						<label for="comment">Feedback:</label>
						<textarea class="form-control" name="feed" rows="5" id="comment" style="resize: none;"></textarea>
                        <input type="submit" class="btn btn-primary" name="save" value="Submit">
					</div>
				</div>
				<?php } }
		}
		?>
        </form>
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