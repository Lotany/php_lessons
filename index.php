<?php session_start(); ?>
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
    </body>
</html>