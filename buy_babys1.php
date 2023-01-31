<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buy</title>
	<script type="text/javascript" src="js/b.js"></script>
	<link rel="stylesheet" type="text/css" href="cart/css/stylecart.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
<nav>
	<section class="logo">
		<img src= "imga/orng.png" style="height: 60px; width: 160px; margin-top: 10px; padding-left:  5px;">
	</section>
	<section class="dropdown">
		<ul>
			<li><a href="#">MENS</a>
				<ul>
					<li><a href="#">Clothes</a>
						<ul>
							<li><a href="cat_mens_shirt.php">Shirts</a></li>
							<li><a href="cat_mens_jeans.php">Jeans</a></li>
							<li><a href="cat_mens_kurtas.php">Kurta's</a></li>
						</ul>
					</li>

                    <li><a href="#">Footwear</a>
                    	<ul>
							<li><a href="cat_mens_shoes.php">Shoes</a></li>
							<li><a href="cat_mens_slip.php">Slippers</a></li>
							<li><a href="cat_mens_sand.php">Sandals</a></li>
						</ul>




                    </li>
			    	<li><a href="#">Cosmetics</a>
			    		<ul>
							<li><a href="cat_mens_deo.php">Deo and perfume</a></li>
							<li><a href="cat_mens_hair.php">Hair jel</a></li>
						</ul>

			    	</li>
				    <li><a href="#">Accessories</a>
				    	<ul>
							<li><a href="cat_mens_watch.php">Watches</a></li>
							<li><a href="cat_mens_belt.php">Belts</a></li>
							<li><a href="cat_mens_sung.php">Sunglasses</a></li>
						</ul>

				    </li>
				 </ul>






			</li>
			<li><a href="#">WOMENS</a>
			<ul>
					<li><a href="#">Clothes</a>
						<ul>
							<li><a href="cat_women_shirt.php">Shirts</a></li>
							<li><a href="cat_women_kurtas.php">Kurta's</a></li>
							<li><a href="cat_women_jeans.php">Jeans</a></li>
						</ul>
					</li>

					<li><a href="#">Footwear</a>
	       			<ul>
							<li><a href="cat_women_shoes.php">Shoes</a></li>
							<li><a href="cat_women_heels.php">Slippers</a></li>
					</ul>

			    	<li><a href="cat_women_cosmetics.php">Cosmetics</a></li>
				    <li><a href="#">Accessories</a>
				    <ul>
							<li><a href="cat_women_ornament.php">Ornament</a></li>
							<li><a href="cat_women_purse.php">Purse</a></li>
							<li><a href="cat_women_sunglasses.php">Sunglasses</a></li>
					</ul>
			</ul>
			</li>


			<li><a href="#">KIDO</a>
				<ul>
					<li><a href="#">Clothes</a>
						<ul>
							<li><a href="cat_kido_shirt.php">Baby-boy</a></li>
							<li><a href="cat_kido_girl.php">Baby-girl</a></li>
							<li><a href="cat_kido_diap.php">Diaper</a></li>
						</ul>
					</li>

                    <li><a href="#">Booty</a>
                    	<ul>
							<li><a href="cat_kido_shoes.php">Shoes</a></li>
							<li><a href="cat_kido_socks.php">Socks</a></li>
						</ul>


                    </li>
			    	<li><a href="#">Cosmetics</a>
			    		<ul>
							<li><a href="cat_kido_soap.php">Baby-Soap</a></li>
							<li><a href="cat_kido_oil.php">Baby-Oil</a></li>
							<li><a href="cat_kido_powder.php">Baby-Powder</a></li>
						</ul>

			    	</li>

				 </ul>



			</li>
		</ul>
	</section>
<section class="font">
	<section class="fon">
			<section class="foni">
		<a href= <?= $log ?>> 
			<i class="fas fa-user"></i>
		</a>
		 <p><?= $user ?></p>
		</section>
        <section class="foni">
        	<a href=<?= $cart ?>>
        		<i class="fas fa-cart-arrow-down"></i>
        	</a>
        		<p>CART</p>
        
            
        </section>
     </section>	</section>
	
	
	<section class="search-box">
		<form action="search.php" method="post" target="_blank">
		<input class="search-txt" type="text" name="Search" placeholder="Type to search">
		<button class="search-btn" type="Submit" name="Submit-Search" > <i class="fas fa-search"></i></button>
	    </form>
    </section>
</nav>
<section class="blank">

<p><a href="proj.php">Home</a></p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="aa">
	<img src="https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/791405.jpg?X56" width="400px " height="400px">
	<h3 align="center">Baby boy blue shirt</h3>
	<h3 align="center">$200</h3>
</section>
<section class="s">
		<h2> Buy Now </h2>
	<form name="Forms" action="http://localhost/project/form1.php" method="POST">
	<fieldset>
	<legend> Personal Info</legend>
	<label for="name">Name:   <input type="name" name="name" id="name" required></label><br><br>
	
	<label for="email">Email:  <input type="email" name="email" id="email" required="required" placeholder="abc@xyz.com"></label><br><br>
	
	Gender: <br>
	<input type="radio" name="gender" id="male" value="Male">
	<label for="male">Male  </label><br>
	<input type="radio" name="gender" id="female" value="Female">
	<label for="female">Female  </label><br>
	<input type="radio" name="gender" id="other" value="Other">
	<label for="other">Other  </label><br>

	Mode of Payement: <br>
	<input type="radio" name="mode" id="gpay" value="G-Pay">
	<label for="gpay">G-Pay  </label><br>
	<input type="radio" name="mode" id="credit" value="Credit_Card">
	<label for="credit">Credit Card  </label><br>
	<input type="radio" name="mode" id="cod" value="Cash_on_Delivery">
	<label for="cod">Cash on Delivery  </label><br>

	<label for="phone">Phone No. :- <input type = "text" name = "phone" id = "phone" pattern = "[0-9]{10}" placeholder="000000000" required><br/></label>

	 <fieldset>
	  <legend>Shipping Information</legend>
	   <label for ="address1">Address (line 1):</label>
      <input type = "text" name = "address1" id = "address1" required><br><br>

      <label for ="address2">Address (line 2):</label>
      <input type = "text" name = "address2" id = "address2" required><br><br>

	  <label for = "shippingzip">Zip code:</label>		  
	  <input type = "text" name = "zip" id = "shippingZip" pattern = "[0-9]{5}" placeholder="00000" required><br/>
        </fieldset>
	<input type="checkbox" id="same" name="same" onchange= "billingFunction()"/>		
        <label for = "same">Is the Billing Information the Same?</label>						
        <fieldset>
 	  <legend>Billing Information</legend>			  
 	  <label for ="address3">Addres (line 1):</label>		  
 	  <input type = "text" name = "address3" id = "address3" required><br><br>

 	  <label for ="address4">Addres (line 2):</label>		  
 	  <input type = "text" name = "address4" id = "address4" required><br><br>
	   
      <label for = "billingzip">Zip code:</label>		  
      <input type = "text" name = "zip" id = "billingZip" pattern = "[0-9]{5}" placeholder="00000" required><br/>
	</fieldset>
	
	<input type="submit" name="submit" id="submit" value="Buy Now">
	</fieldset>
	</form>
</section>
<section class="conta">
	<div class="k">
      <h1>Know about us </h1>
      <p>About us</p>
      <p>Our Policies</p>
      <p>Copyright</p>
</div>
	<div class="f">
<h1>Follow Us On</h1>
<p>Facebook</p>
<p>Instagram</p>
<p>Twitter</p>
</div>

<div class="add">
	<h1>Address</h1>
	<p>Mits Boys Hostel No. 7, Gwalior</p>
	<p>Mail Id:cse.animeshjain@gmail.com</p>
	<p>Contact no : 8717898024</p>

</div>
<div class="fot">
		<a href="helpus.php">
	<button>Help Me</button>
</a>
</div>
<div class="fot2">

<a href="#">
<button><i class="fas fa-sort-up"></i></button>
</a>
</div>
</section>
</body>
</html>