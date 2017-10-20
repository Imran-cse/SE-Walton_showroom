<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../resources/style/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="../resources/style/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../resources/style/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../resources/style/fonts/glyphicons-halflings-regular.eot">
    <link rel="stylesheet" href="../resources/style/fonts/glyphicons-halflings-regular.svg">
    <!--    <link href="https://fonts.googleapis.com/css?family=Nosifer|Raleway" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="../resources/icofont/css/icofont.css">
    <script src="../resources/style/js/carousel.js"></script>
    <title><?php echo ucfirst(basename($_SERVER['PHP_SELF'],'.php')) ?></title>
</head>

<style>
li.dropdown:hover > .dropdown-menu {
    display: inline-block;
    border: inherit;
    font: inherit;
    font-size: inherit;
    text-decoration-color: yellow;
}
</style>

<nav class="navbar nav-tabs" style="border-bottom: inset;">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand" style="color: black;">Walton</span>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../views/home.php"><span class="glyphicon glyphicon-home""></span>Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="../views/mobile.php?category_id=5">Mobile</a></li>
                    <li><a href="../views/laptop.php?category_id=4">Laptop</a></li>
                    <li><a href="../views/television.php?category_id=6">Television</a></li>
                    <li><a href="#">Home Appliances</a></li>
                    <li><a href="#">Electrical Appliances</a></li>
                </ul>
            </li>
            <li><a href="../views/about.php"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
            <li><a href="../views/contact.php"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
            <?php
            if (isset($_SESSION['admin_id'])){
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Admin Panel <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../admin/controlPanel.php">Add new product</a></li>
                        <li><a href="../admin/manageCategory.php">Manage Category</a></li>
                        <li><a href="../admin/manageUser.php">Manage User</a></li>
                        <li><a href="../admin/manageProduct.php">Manage Products</a></li>
                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>
        <form class="navbar-form navbar-left" action="search.php" method="POST">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
            <button class="btn btn-primary" type="submit" >
                <i class="glyphicon glyphicon-search"></i>
            </button>
            </div>
         </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if (isset($_SESSION['login'])){?>
            <li><a href="../views/home.php"><span class="glyphicon glyphicon-user"></span><?php echo
            $_SESSION['user_name'] ?></a></li>
            <?php 
            if (isset($_SESSION['admin_id'])) {}
            else {
                ?>
                <li><a href="#"><i class="glyphicon glyphicon-heart" title="wishlist"></i></a></li>
            <?php } ?>
            <li><a href="../logout.php" ><span class="glyphicon
                glyphicon-log-out"></span>
            Logout</a></li>
            <?php
        }
        else { ?>
        <li><a href="../views/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="../views/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    <?php
}
?>
</div>
</nav>
