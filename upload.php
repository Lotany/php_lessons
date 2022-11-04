<?php

session_start();
 include_once 'inc/config.php';

 if(isset($_POST['upload'])){
    $file = $_FILES['file'];

    $fileName =$file['name'];
    $fileTmpname =$file['tmp_name'];
    $filesize = $file['size'];
    $fileeeror = $file['error'];
    $filetype =$file['type'];

    $fileext =explode('.',$fileName);
    $fileActualext = strtolower(end($fileext));
    $allowed = array('jpg','jpeg','png','pdf');


    
 }