<?php  
	session_start();
	if (isset($_POST['hidden_name']) && isset($_POST['hidden_quantity']))
	{
		$name = $_POST['hidden_name'];
		$quantity = $_POST['hidden_quantity'];

	}
	else
		echo "Error";
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

		if ($conn->connect_error) 
		{
		  die("Connection failed: ".$conn->connect_error);
		}

		$sql1 = "DELETE FROM realcart WHERE name = '".$name."' AND `quantity`='".$quantity."'";

		if ($conn->query($sql1)=== True) 
		{
			header("Location: ccart.php");
		}
		else
		{
			echo "Please try again. <br>$name, $price, $image, $quantity";
		}
		?>
	</div>

</body>
</html>