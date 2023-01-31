<?php
	
	session_start();

	if (isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = hash("md5", $password);
	}
	/*echo "Hi ".$username."<br>";
	echo "of ".$password;*/
$conn = new mysqli("localhost:3306", "root", "", "dbsearch");

if ($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT * from person where username = '".$username."' And password = '".$password_hash."' ";

$result=$conn->query($sql);

if ( $result->num_rows > 0) 
{
	//header("Location: intermediate.php");
	//echo '<script>alert("You have entered wrong password.")</script>';
	$_SESSION['user']= $username;
	header("Location: proj.php?loginned_user=".$username."");
}
else
{
	echo '<script>alert("You have entered wrong password.")</script>';	
	header("Location: log_in.php");
	
}

?>