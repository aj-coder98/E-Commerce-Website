<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_sandals Mens</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

<p><a href="proj.php">Home</a> > Mens > Footwear > Shoes</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://shop.r10s.jp/noel-ange/cabinet/shoes/nike6/nike-882694-002-al-a.jpg">
	<h1>Nike Sandals</h1>
	<h1>$120</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://rukminim1.flixcart.com/image/300/300/sandal/g/u/v/puma-black-puma-royal-cydon-dp-puma-8-original-imaeq4z9xva9nvks.jpeg?q=90">
	<h1>Puma sandals </h1>
	<h1>$100</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://www.uboric.com/wp-content/uploads/2019/11/DSC_0045_result-1.jpg">
	<h1>Khakhi woodland sandal</h1>
	<h1>$220</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://www.easy2by.com/image/cache/catalog/images/ss485%20olive/ss_485_olive_yellow-1-1000x1000.jpg">
	<h1>Sparks footwear</h1>
	<h1>$290</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://5.imimg.com/data5/JT/LX/MY-14556161/action-campus-trunk-28red-29-men-27s-sandal-500x500.png">
	<h1>Action footwear</h1>
	<h1>$160</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://m.media-amazon.com/images/I/71L5VGX1WGL._AC_SR700,525_.jpg">
	<h1>New mens chroma slipper</h1>
	<h1>$170</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>Sandals are an open type of footwear, consisting of a sole held to the wearer's foot by straps going over the instep and, sometimes, around the ankle. Sandals can also have a heel. While the distinction between sandals and other types of footwear can sometimes be blurry (as in the case of huaraches—the woven leather footwear seen in Mexico, and peep-toe pumps), the common understanding is that a sandal leaves all or most of the foot exposed. People may choose to wear sandals for several reasons, among them comfort in warm weather, economy (sandals tend to require less material than shoes and are usually easier to construct), and as a fashion choice..
    </i>
    
    </div>


</section>

<section class="filter">
<div class="inner">
<img src="https://images.unsplash.com/photo-1563434649554-58f91d22ec2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=758&q=80">
<h4>Formals are on their way!!!</h4>

</div>
<div class="filr">
<h2>Payment Methods we offer</h2>
	<i class="fab fa-google-pay"></i>
	<i class="fab fa-apple-pay"></i>
	<i class="fab fa-amazon-pay"></i>
	<i class="fab fa-cc-paypal"></i>
	<i class="fas fa-credit-card"></i>
	<i class="fab fa-cc-mastercard"></i>
</div>
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

<a href="#home">
<button><i class="fas fa-sort-up"></i></button>
</a>
</div>
</section>

</body>
</html>