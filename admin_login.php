<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/adminlogin.css">
    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
    <div class="container">
        <div class="col-left">
        <div class="login-text">
            <h2>Welcome Back</h2>
            <p>Are you an admin?<br>Then you're at the right place.</p>
        </div>
        </div>
        <div class="col-right">
        <div class="login-form">
            <h2>Login</h2>
            <form method="POST" action="admincheck.php" autocomplete="off" enctype="multipart/form-data">
            <p>
                <label>Email Address<span>*</span></label>
                <input type="text" name="aemail" placeholder="Email" required>
            </p>
            <p>
                <label>Password<span>*</span></label>
                <input type="password" name="apassword" placeholder="Password" required>
            </p>
            <p>
                <input type="submit" name="asubmit" value="Sign in" />
            </p>
            <p>
                <a href="">Forgot Password?</a>
            </p>
            </form>
        </div>
        </div>
    </div>
    </div>

    <script src="./assets/js/admin.js"></script>
</body>
</html>
