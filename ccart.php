<?php 	session_start(); 
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="css/stylecart.css">
</head>
<body>
	<h1 style="text-align: center; font-size: 50px;">Cart</h1>
	<div>
		<?php
	


$conn = new mysqli("localhost:3306", "root", "", "dbsearch");

if ($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT * from realcart ";

$result=$conn->query($sql);

if ( $result->num_rows > 0)
{
	while ($product = mysqli_fetch_array($result))
	{
		?>
		<div>
			<form method="POST" action="dcart.php">
				<div>
					<h2> <?=$product['name'] ?></h2>
						<img src="<?=$product['image'] ?>" alt="images" style="height: 200px; width: 200px;">
						<h3> &#8377; <?=$product['price'] ?> * <?=$product['quantity'] ?></h3>
						<input type="hidden" name="hidden_name" value="<?=$product['name'] ?>">
						<input type="hidden" name="hidden_quantity" value="<?=$product['quantity'] ?>">
						<div>
							<input type="submit" name="delete" value="Remove">
						</div>
				</div>
			</form>
		</div>

		<?php
		
	}
}
 $result1=$conn->query($sql);
 if ($result->num_rows > 0) 
 {
 	while ($product = mysqli_fetch_array($result1)) 
 	{
 		$total= $total + ($product['price'] * $product['quantity']);
 	}
 }
 echo "<h1>Total purchased amount is $total</h1>";
?>
			<form method="POST" action="ecart.php">
				<div>
					<div >
						<input type="hidden" name="hidden_total" value="<?=$total ?>">
						<div>
							<input type="submit" name="Buy" value="Buy Now">
						</div>
				</div>
			</form>
</div>
</body>
</html>
