<?php  

include_once '../includes/header.php';
include_once '../database/connect.php';

if (isset($_GET['del'])){
    $delete_id = $_GET['del'];
    $sql1 = "DELETE FROM user where id='$delete_id'";

    $result1 = mysqli_query($con, $sql1);
    header("Location:manageUser.php");
    var_dump($result1);
}

$sql = "SELECT * FROM user";
$result = mysqli_query($con, $sql);

?>

<body>
	<div class="container-fluid">
        <form action="manageUser.php" method="get">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Delete</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    foreach ($result as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><a href="?del=<?php echo $value['id'] ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </form>
	</div>
</body>