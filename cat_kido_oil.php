<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>cat_kido</title>
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

<p><a href="proj.php">Home</a> > Kido > Cosmetics > Baby-oil</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	
	<div class="s1001">
	<img src="https://images-na.ssl-images-amazon.com/images/I/51aQI5zZrjL._SL1000_.jpg">
	<h1>Johnson baby oil </h1>
	<h1>$20</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	
	<div class="s1002">
	<img src="https://cdn.shopify.com/s/files/1/0272/4714/9155/products/baby-massage-oil-50ml_1200x1200.png?v=1582720185">
	<h1>Baby himalaya oil</h1>
	<h1>$15</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	
	<div class="s1003">
	<img src="https://www.pankajakasthuri.in/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/a/baby-oil-020718-v2.jpg">
	<h1>keshkanti baby oil </h1>
	<h1>$100</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://target.scene7.com/is/image/Target/GUEST_a6c7d1bf-c92d-4b63-aa84-506c78f8d289?wid=488&hei=488&fmt=pjpeg">
	<h1>Baby oil </h1>
	<h1>$30</h1>
	<button>Add to cart</button>
	<button>Buy</button>
    </div>
    
    <div class="s1005">
	<img src="https://images-na.ssl-images-amazon.com/images/I/71ttKOjmuyL._SL1500_.jpg">
	<h1>Johnson baby oil</h1>
	<h1>$10</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://www.thespiceclub.in/images/baby1500new.jpg">
	<h1>Vilva baby oil </h1>
	<h1>$65</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>
	
	<div class="content">
		<b>About Cat:</b>

		<i>Johnson's Baby is an American brand of baby cosmetics and skin care products owned by Johnson & Johnson. The brand dates back to 1893 when Johnson's Baby Powder was introduced. Product line consists of baby powder, shampoos, body lotions, massage oil, shower gels and baby wipes. The brand has reputation for making baby products that are "exceptionally pure and safe" since at least the 1980s.
		</i>

    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://images-na.ssl-images-amazon.com/images/I/71j0Zb3eTEL._SX466_.jpg">
<h4>Buy 3 get 1 free</h4>
<button>Shop Now</button>
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

<a href="#">
<button><i class="fas fa-sort-up"></i></button>
</a>
</div>
</section>

</body>
</html>