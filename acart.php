<?php 	session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="css/stylecart.css">
</head>
<body>
	<h1 style="text-align: center; font-size: 50px;">Cart</h1>
	<div>
		<a href="http://localhost/project/cart/ccart.php"> Click Here </a> for checking your Cart
		<?php
	


$conn = new mysqli("localhost:3306", "root", "", "dbsearch");
$tag = mysqli_real_escape_string($conn, $_GET['tag']);

if ($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT * from cart where tag= '$tag'";

$result=$conn->query($sql);

if ( $result->num_rows > 0)
{
	while ($product = mysqli_fetch_array($result))
	{
		?>
		<div>
			<form method="POST" action="bcart.php">
				<div>
					<h2> <?=$product['name'] ?></h2>
					<div >
						<img style="height: 200px; width: 200px;" src="<?=$product['image'] ?>" alt="images">
						<h3> &#8377; <?=$product['price'] ?></h3>
					</div>
					<input type="text" name="quantity" placeholder="Quantity">
					<input type="hidden" name="hidden_name" value="<?=$product['name'] ?>">
					<input type="hidden" name="hidden_price" value="<?=$product['price'] ?>">
					<input type="hidden" name="hidden_image" value="<?=$product['image'] ?>">
					<input type="hidden" name="tag" value="<?=$product['tag'] ?>">
					<div>
						<input type="submit" name="add" value="Add to Cart">
					</div>
				</div>
			</form>
		</div>

		<?php
		
	}
}

?>
</div>
</body>
</html>
