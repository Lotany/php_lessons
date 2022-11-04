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
    $result = mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0){
       while($row =mysqli_fetch_assoc($result)){
        $userid =$row['id'];
        $sql = "insert into profileimg(userid,status) values('$userid',1)";
        mysqli_query($conn,$sql);
        header("Location: index.php");
       }
    }else{
        "error";
    }

}