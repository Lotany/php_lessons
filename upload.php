<?php
session_start();
 include_once 'inc/config.php';

 $id = $_SESSION['id'];

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

  if(in_array($fileActualext,$allowed)){
    if($fileeeror === 0){
        if($filesize <1000000){
            $fileNameNew ="profile".$id.".".$fileActualext;
            $filedestination = 'image/'.$fileNameNew;
            move_uploaded_file($fileTmpname,$filedestination);
            $sql ="update profileimg set status=0 where userid ='$id'";
            $result =mysqli_query($conn,$sql);
            header("Location: index.php?uplloadsuccsess");
        }else {
            echo "Your file is too big";
        }
    }else {
        echo "There was an error uploading your file";
    }
  }else{
    echo "ou cannot upload files of this type";
  }
    
 }