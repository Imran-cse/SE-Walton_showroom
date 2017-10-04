<?php include "../includes/header.php"
/*
 * Created by PhpStorm.
 * User: imran
 * Date: 28-Aug-17
 * Time: 6:24 PM
 */
?>

<div class="panel col-md-5 col-lg-offset-4" style="border: outset; border-bottom: inset;
                    border-right: inset; margin-top: 50px">
    <div class="panel-heading">
        <h3>Login</h3>
    </div>
    <div class="panel-body">
        <form action="" method="post" class="form-horizontal">
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
            <div>
                <input type="button" id="login" value="Login" class="btn btn-primary" required>
            </div>
        </form>
    </div>
</div>
