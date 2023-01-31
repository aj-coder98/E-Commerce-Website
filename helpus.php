<?php 
include'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>help me</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>
<body>
<section class="bg_help">
<a href="proj.php">
	<button class="back_bt">KAA.COM</button>
</a>
<section class="heading">
	<h1>What's your query buddy</h1>
	<form id="help" class="input-group">
			
				<label for="name">
					Name<br>
					<input type="text" name="name" id="name" placeholder="" required>
				</label><br><br>
				
				<label for="mobile">
					Mobile number<br>
					<input type="numeric" name="mobile" id="mobile" placeholder="" required>
				</label><br><br>
				
				<label for="email">
					Email<br>
					<input type="text" name="email" id="email" placeholder="" required>
				</label><br><br>
				<label  for="msg">
					Mesaage<br>
					<input class="msge" type="text" name="msg" id="msg" placeholder="" required>
				</label><br><br>
				<a href="helpdone.php">
				<input type="submit" name="submit" id="log" value="Login">
				</a>
		</form>
</section>
</section>
</body>
</html>