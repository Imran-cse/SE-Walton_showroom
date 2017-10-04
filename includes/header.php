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

<nav class="navbar nav-tabs" style="background-color: none; border-bottom: inset;">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand" style="color: black;">Walton</span>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../views/home.php"><span class="glyphicon glyphicon-home""></span>Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="mobile.php">Mobile</a></li>
                    <li><a href="laptop.php">Laptop</a></li>
                    <li><a href="television.php">Television</a></li>
                    <li><a href="#">Home Appliances</a></li>
                    <li><a href="#">Electrical Appliances</a></li>
                </ul>
            </li>
            <li><a href="../views/about.php"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
            <li><a href="../views/contact.php"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="../views/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../views/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
