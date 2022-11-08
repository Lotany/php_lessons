<?php
session_start();
include_once 'inc/config.php';

$sessionid= $_SESSION['id'];
$filename = "image/approve".$sessionid."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
