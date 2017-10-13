<?php 
include "../includes/header.php"; 
include_once '../database/connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO user(name, email, password, address, contact) VALUES('$name', '$email', '$password', '$address', '$contact')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location:login.php");
    }
}
?>

<body>
    <div class="panel col-md-5 col-md-offset-4" style="border-top: outset; border-left: outset;
    border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading" align="center">
        <h3>Register as a new user</h3>
    </div>
    <div class="panel-body">
        <form action="" method="post" class="form-horizontal" >
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">Name</label>
                <div class="col-md-8">
                    <input id="name" type="text" name="name" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-8">
                    <input id="email" type="email" name="email" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">Password</label>
                <div class="col-md-8">
                    <input id="password" type="password" name="password" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-md-2 control-label">Address</label>
                <div class="col-md-8">
                    <input id="address" type="text" name="address" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="contact" class="col-md-2 control-label">Contact</label>
                <div class="col-md-8">
                    <input id="contact" type="" name="contact" value="" class="form-control" required>
                </div>
            </div>
            <div align="center">
                <input type="submit" name="submit" id="btnRegister" value="Signup" class="btn btn-primary"
                onclick="" />
            </div>

        </form>
    </div>
</div>
</div>
<div class="panel-footer" style="position: absolute;bottom: 0;width: 100%;text-align: center;">
    <p style="color: black">
        copyright Walton Bangladesh Limited @2017
    </p>    
</div>
</body>
</html>