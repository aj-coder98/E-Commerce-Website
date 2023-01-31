<?php
include'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verification</title>
</head>
<body>
	<h1><u>Verification</u></h1>
	<h2>Kindly Verify Your details</h2>
	<form name="Forms" action="http://localhost/project/form.php" method="POST">
	<fieldset>
	<legend> Personal Info</legend>
	<label for="name">Name:   <input type="text" name="name" id="name" readonly value= <?= $_POST['name']?>></label><br><br>
	
	<label for="email">Email:  <input type="email" name="email" id="email" readonly value= <?= $_POST['email']?>></label><br><br>
	
	Gender: 
	<input type="text" name="gender" id="male" readonly value= <?= $_POST['gender']?>><br><br>

	Mode of Payement: 
	<input type="text" name="mode" id="mode" readonly value= <?= $_POST['mode']?>><br><br>


	<label for="phone"> Phone No. : <input type="text" name="phone" readonly value= <?= $_POST['phone']?>></label><br><br>

	<label for="address1">Address (line 1)   <input type="text" name="address1" id="address1" readonly value= <?= $_POST['address1']?>></label><br><br>

	<label for="address2">Address (line 1)   <input type="text" name="address2" id="address2" readonly value= <?= $_POST['address2']?>></label><br><br>

	<input type="submit" name="submit" id="submit" value="Verify">

	</fieldset>
	</form>

</body>
</html>