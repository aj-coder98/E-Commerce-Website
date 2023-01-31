<?php   
session_start(); 
session_destroy();
header("Location: proj.php");
//exit();
?>