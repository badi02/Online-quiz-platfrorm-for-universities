<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title>SignUp | Simple Online Quiz System</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body id='login-body' class="bg-light">
        <div class="card col-md-6 offset-md-3 text-center bg-primary mb-4">
            <h3 class="he3-responsive text-white">Simple Online Quiz System</h3>
        </div>
        <div class="card col-md-4 offset-md-4 mt-4">
        <div class="card-header-edge text-white">
            <strong>Login</strong>
        </div>
            <div class="card-body">
                <form id="login-frm">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control">
                    </div> 
                    <div class="form-group text-right">
                        <button class="btn btn-primary btn-block" name="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
            require('db_connect.php');
            // When form submitted, insert values into the database.
            if (isset($_REQUEST['username'])){
                //remove backslashes
                $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
                $username = mysqli_real_escape_string($conn, $username);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                

            }
        ?>
    </body>
</html>