<?php 
include "../includes/header.php";
include_once '../database/connect.php';

if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    if($result->num_rows < 1){
        //header("Location: login.php");
        echo "not valid";
    }
    else {
        $value = mysqli_fetch_assoc($result);
        
        $_SESSION['login'] = 'true';
        $_SESSION['user_id'] = $_POST['email'];
        $_SESSION['u_id'] = $value['id'];
        $_SESSION['user_name'] = $value['name'];
        header("Location:home.php");
    }

}

if (isset($_POST['admin_login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE mail='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    
    if ($result){
        $value = mysqli_fetch_assoc($result);
        session_start();

        $_SESSION['login'] = 'true';
        $_SESSION['admin_id'] = $_POST['email'];
        $_SESSION['user_name'] = $value['name'];
        header("Location:home.php");
    }
    else{
        header("Location:login.php");
    }
}

?>

<body>
    <div class="form-control">
    <div class="panel col-md-5 col-lg-offset-4" style="border: outset; border-bottom: inset;
    border-right: inset; margin-top: 50px">
    <div class="panel-heading">
        <h3>Login</h3>
    </div>
    <div class="panel-body">
        <form action="login.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-7">
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">Password</label>
                <div class="col-md-7">
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
            </div>
            <div align="left" class="col-md-2">
                <input type="submit" name="login" id="login" value="Login" class="btn btn-primary">
            </div>
            <div align="right">
                <input type="submit" name="admin_login" id="admin_login" value="Admin Login" class="btn">
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