<?php
session_start();


$user = isset($_SESSION['user']) ? " Hi ".$_SESSION['user']:"Log In";
if($user== "Log In")
{
	$log="log_in.php";
	$cart= "log_in.php";
}
else{
	$log="log_out.php";
	$cart= "cart/ccart.php";
}
?>