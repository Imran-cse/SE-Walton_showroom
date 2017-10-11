<?php
include_once '../includes/header.php';
include_once '../database/connect.php';

if (isset($_POST['submit'])) {
		$sql = "INSERT INTO category(name) VALUES ('".$_POST["txtCategory"]."')";
		if (mysqli_query($con, $sql)) {
			echo "data added successfully";
		}
}
?>
<body>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Add Category</h4>
		</div>
		<div class="panel-body">
			<form action="manageCategory.php" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="txtCategory" class="col-md-2 control-label">Name</label>
	                <div class="col-md-8">
	                    <input id="txtCategory" type="text" name="txtCategory" value="" class="form-control" required>
	                </div>
                </div>
                <div align="center">
                    <input type="submit" name="submit" id="btnCategory" value="Add" class="btn btn-primary"/>
                </div>
			</form>
		</div>
	</div>
</body>