<?php
session_start();
 if(isset($_POST['submit-login'])){
    $_SESSION['id'] = 6;
    header("Location: index.php");
 }