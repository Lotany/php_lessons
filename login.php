<?php
session_start();
 if(isset($_POST['submit-login'])){
    $_SESSION['id'] = 10;
    header("Location: index.php");
 }