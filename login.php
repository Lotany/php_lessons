<?php
session_start();
 if(isset($_POST['submit-login'])){
    $_SESSION['id'];
    header("Location: index.php");
 }