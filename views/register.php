<?php 
include "../includes/header.php"; 
include_once '../database/connect.php';

if (isset($_POST['submit'])) {

    if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['password2'])&&!empty($_POST['address'])&&!empty(['contact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];

        if ($password == $password2) {
            $password = md5($password);
            $sql = "INSERT INTO user(name, email, password, address, contact) VALUES('$name', '$email', '$password', '$address', '$contact')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                header("Location:login.php");
            }    
        }
        else {
            $error_message = "Two passwords do not match";
            echo '<div class="label col-lg-5 col-md-offset-4" style="text-align:center;background-color: #ff8080;">
        <span style="font-size: 20px;font-family:verdana;">'.$error_message.'</span>
    </div>';
        }       
    }
    else {
        $error_message = "You need to fill all fields";
        echo '<div class="label col-lg-5 col-md-offset-4" style="text-align:center;background-color: #ff8080;">
        <span style="font-size: 20px;font-family:verdana;">'.$error_message.'</span>
    </div>';
    }
}
?>

<body>

<div class="panel col-md-5 col-md-offset-4" style="border-top: outset; border-left: outset;
    border-bottom: inset; border-right: inset; margin-top: 50px;">

    <div class="panel-heading" align="center">
        <h3>Register as a new user</h3>
    </div>
    <div class="panel-body" >
        <form action="" method="post" class="form-horizontal" >
            <div class="form-group" >
                <label for="name" class="col-md-2 control-label"></label>
                <div class="col-md-8" align="center">
                    <input id="name" type="text" name="name" value="" class="form-control" placeholder="Username" >
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <input id="email" type="email" name="email" value="" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <input id="password" type="password" name="password" value="" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="password2" class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <input id="password2" type="password" name="password2" value="" class="form-control" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <input id="address" type="text" name="address" value="" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="form-group">
                <label for="contact" class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <input id="contact" type="tel" name="contact" value="" class="form-control" placeholder="Contact Number">
                </div>
            </div>
            <div align="center">
                <input type="submit" name="submit" id="btnRegister" value="Signup" class="btn btn-primary"
                onclick="" />
            </div>
        </form>
    </div>
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
</html>