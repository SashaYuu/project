<?php include('server_admin.php') ?>
<?php require('server_admin.php') ?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../css/stylelog.css">
</head>

<body>
    <div class="header">
        <h2>Admin Login</h2>
    </div>

    <form method="post" action="admin_login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="adminusername" maxlength="30">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="adminpassword" maxlength="30">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
            <form class="btn">
                    <li><a href="login.php"> Normal login </a> </li>

            </form>
        </div>
    </form>
</body>

</html>
<?php
echo ($adminpassword);
echo ($adminusername);
