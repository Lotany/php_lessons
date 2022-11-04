<?php
 include 'inc/config.php';
if (isset($_POST['signup-btn'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $uid = $_POST['uid'];
    $pass = $_POST['pwd'];

    $sql = "insert into user(first,last,username,password) values('$first','$last','$uid','$pass')";
    mysqli_query($conn,$sql);

    $sql1= "select * from user where username ='$uid' and first='$first'";

}