<?php
include'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>log in </title>
</head>
<style>
	.body{
		margin: 0px;

	}
	.hero{
		height: 100%;
		width: 100%;
		background-image: url('https://images.unsplash.com/photo-1503217195339-397eb18024e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');
		background-size: cover;
		position: absolute;
	}
	.form-box{
		width: 350px;
		height: 430px;
		position: relative;
		margin: 5% auto;
		padding:5px;
		background:white;
        overflow: hidden;
        border-top-right-radius: 100px;
        border-bottom-left-radius: 100px;


	}
	.button-box{
		width: 220px;
		margin:35px auto;
		position: relative;
		border-radius: 30px;
		box-shadow: 0 0 15px 5px black;
		font-size: 20px;
		background-color: 
		
	}
  .toggle-btn{
  	padding:10px 30px;
  	cursor: pointer;
  	background-color: transparent;
  	border:0;
  	outline: none;
  	position: relative;
  }
 #btn{
 	top:0;
 	left: 0;
 	position: absolute;
 	width: 110px;
 	height: 100%;	
 	background-color:#ffc453;
    border-radius: 30px;
 	transition: 0.5s;

 }
.input-group{
	top:180px;
	width: 280px;
	position:absolute;
	transition: 0.5s;

}
#user,#email,#pass{
	width: 100%;
	margin:5px 0;
	padding-top: 10px 0;
	border-top:0px;
	border-left: 0px;
	border-right: 0px;
	border-bottom: 1px solid #999;
	outline: none;
	background:transparent;
}
#log,#sign{
	width: 65%;
	height:35px;
	padding-top: 10px 30px;
	margin:20px;
	background:#ffc453;
	outline: none;
	border-radius: 30px;
}
#login{
	left:50px;
}
#register{
	left: 450px;
}



</style>
<body>

<script>
	function myFunction() 
	{
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<div class="hero">
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
		<button type="button" class="toggle-btn" onclick="login()">log in</button>
		<button type="button" class="toggle-btn" onclick="register()">sign up</button>
		</div>
		
			<form action="http://localhost/project/login.php" id="login" class="input-group" method="POST">
			
				<label for="user">
					Username :
					<input type="text" name="username" id="user" placeholder="Enter Your Username" required>
				</label><br><br>


				<label for="pass">
					Password :
					<input type="password" name="password" id="pass" placeholder="Enter Your Password" required>

				<input type="checkbox" onclick="myFunction()">Show Password
				
				</label><br><br>
				<input type="submit" name="submit" id="log" value="Login">
				
			</form>
	

        
			<form action="http://localhost/project/signin.php" id="register" class="input-group" method="POST">
				<label for="user">
					Username :
					<input type="text" name="username" id="user" placeholder="Enter Your Username" required>
				</label><br><br>
				
				<label for="user">
					Email :
					<input type="email" name="email" id="email" placeholder="Enter Your Email" required>
				</label><br><br>
				
				<label for="pass">
					Password :
					<input type="Password" name="password" id="pass" placeholder="Enter Your Password" required>
				</label><br><br>
				<input type="submit" name="submit" id="sign" value="Sign In">
			
			</form>
	


	</div>
</div>
<script>
	var x=document.getElementById("login");

	var y=document.getElementById("register");

    var z=document.getElementById("btn");

    function register(){
       x.style.left="-400px";
       y.style.left="50px";
       z.style.left="110px";
   }
   

     function login(){
       x.style.left="50px";
       y.style.left="450px";
       z.style.left="0px";
   }
</script>
</body>
</html>