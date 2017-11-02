<?php

include_once '../includes/header.php';
include_once '../database/connect.php';

if (isset($_GET['del_pro'])){
    $delete_id = $_GET['del_pro'];
    $delete_name = $_GET['del_name'];
    $sql1 = "DELETE FROM products where id='$delete_id'";

    $result1 = mysqli_query($con, $sql1);

    //deleting file from server
    unlink("../resources/images/".$delete_name);

    header("Location:manageProduct.php");

}

$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql);

?>

<body>
<div class="container-fluid">
    <form action="" method="get">
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

                        <td><a href="../admin/updateProducts.php?edit_pro=<?php echo $value['id'] ?>">Edit <span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><a href="?del_pro=<?php echo $value['id'] ?>&del_name=<?php echo $value['image'] ?>">Delete
                                <span class="glyphicon
                        glyphicon-trash"></span></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>

</div>
</body>