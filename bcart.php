<?php  
	session_start();
	if (isset($_POST['hidden_name']) && isset($_POST['hidden_price']) && isset($_POST['quantity']))
	{
		$name = $_POST['hidden_name'];
		$price = $_POST['hidden_price'];
		$image = $_POST['hidden_image'];
		$quantity = $_POST['quantity'];
		$tag = $_POST['tag'];

	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Inside Cart</title>
</head>
<body>
	<div>
		<h1 style="text-align: center; font-size: 50px;">Shopping Cart Details</h1>
		<?php
		$conn = new mysqli("localhost:3306", "root", "", "dbsearch");
		$tag = mysqli_real_escape_string($conn, $_POST['tag']);
		$sql = "SELECT * from cart where tag= '$tag'";
		$result=$conn->query($sql);
		$product = mysqli_fetch_array($result);

		if ($conn->connect_error) 
		{
		  die("Connection failed: ".$conn->connect_error);
		}

		$sql1 = "INSERT INTO `realcart`( `name`, `price`, `image`, `quantity`) VALUES ('".$name."','".$price."','".$image."','".$quantity."')";

		if ($conn->query($sql1)=== True) 
		{
			header("Location: acart.php ?tag=".$product['tag']." ");
		}
		else
		{
			echo "Please try again. <br>$name, $price, $image, $quantity";
		}
		?>
	</div>

</body>
</html>