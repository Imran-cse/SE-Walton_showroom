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
            <a class="navbar-brand" href="#" style="color: black;">Walton</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-home""></span>Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Television</a></li>
                    <li><a href="#">Refrigerator</a></li>
                </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
