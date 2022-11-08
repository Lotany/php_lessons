<?php session_start();
include 'inc/config.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profile image</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

<?php 

 $sql = "select *from user";
 $result =mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0){
     while($row =mysqli_fetch_assoc($result)){
     $id =$row['id'];
     $sqlimg = "select * from profileimg where userid='$id'";
     $resultimg =mysqli_query($conn,$sqlimg);

     while($rowimg=mysqli_fetch_assoc($resultimg)){
        echo "<div class'para'>";
        if ($rowimg['status'] == 0){
            echo "<img class='img-one' src='image/approve".$id.".jpg?'".mt_rand().">";
        }else {
            echo "<img src='image/approve_icon.gif'>";
        }
        echo $row['username'];
       echo "</div>";
     }
     }
 }else{
    echo "No users";
 }

    if(isset($_SESSION['id'])){
        if(isset($_SESSION['id'])==1){
            echo "Logged in as $id";
        }

        echo '<form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="upload">upload</button>
    </form>';
    } else {
        echo "you are logged out";
    echo '<form action="signup.php" method= "POST">
        <input type="text" name ="first" placeholder= "fistname">
        <input type="text" name ="last" placeholder= "lastname">
        <input type="text" name ="uid" placeholder= "username">
        <input type="password" name ="pwd" placeholder= "password">
        <button type= "submit" name="signup-btn">Signup</button>
        </form>';
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