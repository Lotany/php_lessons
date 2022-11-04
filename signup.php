<?php
if (isset($_POST['signup-btn'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $uid = $_POST['uid'];
    $pass = $_POST['pwd'];

    $sql = "insert into user(first,last,username,password) values($first,$last,$uid,$pass)";
    $result = mysqli_query($conn,$sql);
    if($result = true){
        echo "success";
        header("Location: index.php?success");
    }
}