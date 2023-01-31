<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_sung</title>
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
		<button class="search-btn" type="Submit" name="Submit-Search" > <i class="fas fa-search">/i></button>
	    </form>

    </section>
</nav>
<section class="blank">

<p><a href="proj.php">Home</a> > Mens > Accessories > Sunglasses</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://d1xbedroeo1z0l.cloudfront.net/fit-in/400x600/Amazon.in/XRVOS_amz_B07K1HKG4C_1100x1100.jpg">
	<h1>Fastrack Aviator Sunglasses</h1>
	<h1>$50</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://rukminim1.flixcart.com/image/714/857/sunglass/g/y/s/vc-5107-green-gunmetal-vincent-chase-large-original-imadrfrxmz3dh89p.jpeg?q=50">
	<h1>Vincent-Chase Sunglasses </h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://au.shadestation.com/media/thumbs/920x575/media/product_images/Calvin-Klein-Sunglasses-CK18112S-045fw920fh575.jpg">
	<h1>Calvin Klien Mens Sunglasses </h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://cdn.shopify.com/s/files/1/2655/2888/products/Steampunk-Sunglasses-Women-Round-Glasses-Goggles-Men-Side-Visor-Circle-Lens-Unisex-Vintage-Retro-Style-Punk_1500x1500_EMBED_Gold_Frame_Gold_Lens_900x.jpg?v=1523071917">
	<h1>Retro Mens Sunglasses</h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQIbpjpfYSd0eOLylMTcJx1zqtxAUhL8RM8WA&usqp=CAU">
	<h1>Ray-Ban Mens Sunglasses</h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://lh3.googleusercontent.com/proxy/BFFDkHKwB1nnlM7yODJu4lG3v0VAiGXgY6f4mee8QHpi3WsXCEn2puNwW4852nnO5JT8riFAzRquGqm7pmJMW6MsqyTBotSo5KGoKtm9y9_LzgTYHhrVgG6jf-IMRsplBmzIszHUYU3H2cWo0wC7azHmnJTiOHzlhaUugm3jj5r866iE4KWbf2cC7fAvMH4j-jKcfA8DqTyhc0i2h71BlEWwFkyRP_1PA2mAMZ1SWPjRaqPpwfyr">
	<h1>Gucci Mens Sunglasses</h1>
	<h1>$200</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>Sunglasses or sun glasses (informally called shades or sunnies; more names below) are a form of protective eyewear designed primarily to prevent bright sunlight and high-energy visible light from damaging or discomforting the eyes. They can sometimes also function as a visual aid, as variously termed spectacles or glasses exist, featuring lenses that are colored, polarized or darkened. In the early 20th century, they were also known as sun cheaters (cheaters then being an American slang term for glasses.

Since the 1930s, sunglasses have been a popular fashion accessory, especially on the beach.

The American Optometric Association recommends wearing sunglasses that block ultraviolet radiation (UV) whenever a person is in the sunlight to protect the eyes from UV and blue light, which can cause several serious eye problems.
    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://www.marketing91.com/wp-content/uploads/2019/06/Most-Expensive-Sunglasses-10.jpg">
<h4>Trending on No. 1.</h4>

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