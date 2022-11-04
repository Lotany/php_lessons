<?php session_start();
include 'inc/config.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profile image</title>
    </head>

    <body>
        <form action="upload.php" method="POST">
            <input type="file" name="file">
            <button type="submit" name="submit">upload</button>
        </form>
   <p>login user</p>
        <form action="login.php" method="POST">
            <button type="submit" name="submit-login">Login</button>
        </form>
    </body>
</html>