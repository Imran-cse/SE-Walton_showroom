<?php

include_once '../includes/header.php';
include_once '../database/connect.php';

if (isset($_GET['del_pro'])){
    $delete_id = $_GET['del_pro'];
    $sql1 = "DELETE FROM products where id='$delete_id'";

    $result1 = mysqli_query($con, $sql1);
    header("Location:manageProduct.php");
    var_dump($result1);
}

$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql);

?>

<body>
<div class="container-fluid">
    <form action="manageUser.php" method="get">
        <table class="table table-bordered">
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                foreach ($result as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['price'] ?></td>
                        <td><?php echo $value['quantity'] ?></td>
                        <td><a href="?edit_id=<?php echo $value['id']?>" data-toggle="modal"
                                data-target="#myModal"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><a href="?del_pro=<?php echo $value['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>

</div>
</body>