<?php session_start();
include 'inc/config.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profile image</title>
    </head>

    <body>

<?php 
    if(isset($_SESSION['id'])){
        if(isset($_SESSION['id'])==1){
            echo "Logged in as admin";
        }

        echo '<form action="upload.php" method="POST">
        <input type="file" name="file">
        <button type="submit" name="submit">upload</button>
    </form>';
    } else {
        echo "you are logged out";
    }
?>


   <p>login user</p>
        <form action="login.php" method="POST">
            <button type="submit" name="submit-login">Login</button>
        </form>

        <p>logout user</p>
        <form action="logout.php" method="POST">
            <button type="submit" name="submit-logout">Logout</button>
        </form>
    </body>
</html>