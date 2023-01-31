<?php
include'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>baby-boy1</title>
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
     </section>
	</section>
	
	
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
	<section class="pic7">

	</section>
	<section class="pic8">
		
	</section>
	<section class="pic9">
		
	</section>
</section>
<section class="descr">
	<p>Description</p>
	<h1>Mono Giraffe Stretch T-Shirt</h1>
<h1>And Leggings Set</h1>
	<ul>
		<li>* 3D character appliqué detailing</li>
		<li>* Stretch for added comfort.</li>
		<li>* Up to 12 months have nickel-free poppers to protect against irritation</li>
		<li>* Machine washable.</li>
<li>* T-shirt and Leggings 95% Cotton, 5% Elastane.</li>
<li>* keep-away-from-fire</li>	
<br>
<b>***Warning: Keep away from fire and flames***
</b>
</ul>
<h2>Final Price: $120</h2>
<img src="https://seeklogo.com/images/F/free-delivery-logo-3F8F5B428D-seeklogo.com.png">
<img src="https://thumbs.dreamstime.com/b/assured-quality-stamp-assured-quality-stamp-white-168913617.jpg">
<img src="https://media.istockphoto.com/vectors/return-of-goods-within-7-days-icon-7-days-on-white-background-blue-vector-id867232580?k=6&m=867232580&s=170667a&w=0&h=W1c3PoDpDINLGjhmT21sVRkUfmaV6h0KAadACDd_2_I=">
<button class="cart">Add to cart</button>
<button class="buy" onclick="window.location.href='buy_babys1.php'">Buy</button>
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
	<p>3.6/5</p>
	<p>Quality</p>
</section>
<section class="rating">
	<p>4.1/5</p>
	<p>Durable</p>
</section>
<section class="rating">
	<p>4.0/5</p>
	<p>Overall</p>
</section>
</section>
</section>
<section class="relpro">
<h2>Related products</h2>
<section class="related">
<a href="cat_mens_shirt.php">
<img src="https://cdn.shopify.com/s/files/1/2326/8617/files/Pom_Pom_Suit_Unisex_Banner_4x5_e7d1ee61-5a6c-464c-aaae-f676d4d59ba0_1800x.jpg?v=1563022579">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php"><img src="https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/791405.jpg?X56">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://i.ebayimg.com/thumbs/images/g/6yEAAOSw49JesfUX/s-l225.jpg">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/10782486/2020/1/22/6d74b7c1-7990-4305-acb1-1c2e07599f221579686475599-Gini-and-Jony-Boys-T-shirt-581579686473192-1.jpg">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/101169.jpg?X56">
</a>
</section>
<section class="related">
<a href="cat_mens_shirt.php">
	<img src="https://ae01.alicdn.com/kf/HTB12YO5X.vrK1RjSspcq6zzSXXaA.jpg_q50.jpg">
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
	<button><b>HELP ME</b></button>
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