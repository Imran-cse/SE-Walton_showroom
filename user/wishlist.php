<?php
include_once "../includes/header.php";
include_once "../database/connect.php";

if (isset($_SESSION['user_id'])) {
    $user_id = $_GET['user_id'];
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}

//deleting wish of a product
if (isset($_GET['del_wish'])){
    $delete_id = $_GET['del_wish'];
    $sql1 = "DELETE FROM wishlist where product_id='$delete_id'";

    $result1 = mysqli_query($con, $sql1);
    header("Location:wishlist.php");
    var_dump($result1);
}

$sql = "SELECT product_id FROM wishlist WHERE user_id='$user_id'";
$result = mysqli_query($con, $sql);


?>
<body>
	<div class="container-fluid" >
        <h2>Your Wishlist</h2>
        <form action="" method="get" >
            <table class="table table-bordered" >
                <tr >
                    <th > Name</th >
                    <th > Delete</th >
                </tr >
                <?php
                if ($result->num_rows > 0) {
                    foreach ($result as $value) {
                        $sql2 = "SELECT * FROM products WHERE id='".$value['product_id']."'";
                        $res_product = mysqli_query($con, $sql2);
                        $row = mysqli_fetch_assoc($res_product);
                        ?>
                        <tr>

                            <td><?php echo $row['name'] ?></td>
                            <td><a href="?del_wish=<?php echo $row['id'] ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </form>
    </div>
</body>
