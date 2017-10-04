<?php include "../includes/header.php"
/*
 * Created by PhpStorm.
 * User: imran
 * Date: 8/19/18
 * Time: 12:24 PM
 */
?>

<body>
<div class="panel col-md-5 col-md-offset-4" style="border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading">
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
                    <input id="name" type="email" name="email" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">Password</label>
                <div class="col-md-8">
                    <input id="name" type="password" name="password" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-md-2 control-label">Address</label>
                <div class="col-md-8">
                    <input id="name" type="text" name="address" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="contact" class="col-md-2 control-label">Contact</label>
                <div class="col-md-8">
                    <input id="name" type="number" name="name" value="" class="form-control" required>
                </div>
            </div>
            <div>
                <input type="button" id="submit" value="Save" class="btn btn-primary"
                       onclick="" />
            </div>

    </form>
    </div>
</div>
</body>
</html>