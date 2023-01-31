<?php 	
session_start(); 
$total = $_POST['hidden_total'];
echo "<script> alert('Thanks for shopping with us <br> Your order of &#8377 $total will be delivered on your address.')</script>";
echo "<a href='http://localhost/project/proj.php'> Click Here</a> for contuning shopping.";
?>