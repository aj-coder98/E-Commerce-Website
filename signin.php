<?php  
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
	{
		$username = $_POST['username'];
		$password = $_POST['password']; 
		$password_hash = hash("md5", $password);
		//$password_hash = password_hash($password, PASSWORD_DEFAULT);
		$email 	  = $_POST['email'];
	}
	/*echo "Hi ".$username."<br>";
	echo "of ".$password;*/
$conn = new mysqli("localhost:3306", "root", "", "dbsearch");

if ($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO `person` (`username`, `email`, `password`) VALUES ('".$username."', '".$email."', '".$password_hash."')";

if ($conn->query($sql)=== True) 
{
	echo "You have succesfully Signed in.";
}
else
{
	echo "Sign in Failed, Please try again. <br>";
echo $password_hash;
}
?>