<?php
session_start();
include_once 'inc/config.php';

$sessionid= $_SESSION['id'];
$filename = "image/approve".$sessionid."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);

$fileactualext = $fileext[1];

$file = "image/approve".$sessionid.".".$fileactualext;

if(!unlink($file)){
    echo "File was not deleted";

}else{
    echo "File was deleted";
}

$sql = "update profileimg set status= 1 where userid = '$sessionid';";
$result = mysqli_query($conn, $sql);

header("Location: index.php?deletecomplete");