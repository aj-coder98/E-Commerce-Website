<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>shirt2</title>
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

<p><a href="proj.php">Home</a>

</section>
<section class="main">
<section class="box">
	<p>Products</p>
	<section class="pic4">

	</section>
	<section class="pic5">
		
	</section>
	<section class="pic6">
		
	</section>
</section>
<section class="descr">
	<p>Description</p>
	<h1>U.S. Polo Assn.</h1>
<h1>Men Pink Polo T-shirt</h1>
	<ul>
		<li>* Cotton
<li>* Regular Fit
<li>* Main Trend
<li>* New Basics
<li>* Multipack Set
<li>* Single
<li>* Polo Collar
<li>* Casual
<li>* Solid
<li>* Product Code: 503326
</ul>
<h2>Final Price: $200</h2>
<img src="https://seeklogo.com/images/F/free-delivery-logo-3F8F5B428D-seeklogo.com.png">
<img src="https://thumbs.dreamstime.com/b/assured-quality-stamp-assured-quality-stamp-white-168913617.jpg">
<img src="https://media.istockphoto.com/vectors/return-of-goods-within-7-days-icon-7-days-on-white-background-blue-vector-id867232580?k=6&m=867232580&s=170667a&w=0&h=W1c3PoDpDINLGjhmT21sVRkUfmaV6h0KAadACDd_2_I=">
<button class="cart">Add to cart</button>
<button class="buy" onclick="window.location.href='buy_mens_shirt_s2.php'">Buy</button>
</section>
<section class="revi">
<section class="review">
	<h1>What our customer says</h1>
	<p>aj@1998: very nice product.</p>
	<p>kp#981: best product</p>
	<p>kp#981: Good quality and packaging</p>
	<p>kp#981: avg one should not buy</p>
	<p>kp#981: Good quality</p>
	<p>kp#981: very nice product love it</p>
	<p>kp#981: Poor packaging</p>
</section>
<h1 class="rat">Ratings</h1>
<section class="rating">
	<p>4.2/5</p>
	<p>Quality</p>
</section>
<section class="rating">
	<p>4.6/5</p>
	<p>Durable</p>
</section>
<section class="rating">
	<p>4.4/5</p>
	<p>Overall</p>
</section>
</section>
</section>
<section class="relpro">
<h2>Related products</h2>
<section class="related">
<a href="cat_mens_shirt.php">
<img src="https://www.fabindia.com/ccstore/v1/images/?source=/file/v3744307102910851434/products/10546033BR.f.26092018.jpg">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php"><img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/503326/2018/5/9/4c89a202-cb13-45a0-8cf0-abe68854de341525860756905-US-Polo-Assn-Men-Pink-Polo-T-shirt-3291525860756627-1.jpg">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://images-na.ssl-images-amazon.com/images/I/81dj59oSLlL._AC_UX466_.jpg">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1537981204/440103_X3F05_9045_004_100_0000_Light-Oversize-washed-T-shirt-with-Gucci-logo.jpg">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://images.asos-media.com/products/levis-t-shirt-batwing-logo/5373264-1-black?$XXL$&wid=513&fit=constrain">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://lalightdesigns.com/images/Punch-Logos-shirts.gif">
</a>
</section>

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