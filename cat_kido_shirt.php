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

<p><a href="proj.php">Home</a> > Kido > Clothes > Baby-Boy</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://i.ebayimg.com/thumbs/images/g/6yEAAOSw49JesfUX/s-l225.jpg">
	<h1>Baby clothes Levis</h1>
	<h1>$50</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	
	<div class="s1002">
	<img src="https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/791405.jpg?X56">
	<h1>Baby boy blue shirt</h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<a href="baby_boy_s1.php">
		<button>Buy</button>
	</a>
	</div>
	
	<div class="s1003">
	<img src="https://cdn.shopify.com/s/files/1/2326/8617/files/Pom_Pom_Suit_Unisex_Banner_4x5_e7d1ee61-5a6c-464c-aaae-f676d4d59ba0_1800x.jpg?v=1563022579">
	<h1>U.SPolo.Assa. Baby suit</h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    
    <div class="s1004">
	<a href="baby_boy_s2.php">
		<img src="https://xcdn.next.co.uk/Common/Items/Default/Default/ItemImages/Search/224x336/101169.jpg?X56">
	<h1>Levis Full outfit</h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
</a>
    <div class="s1005">
	<img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/10782486/2020/1/22/6d74b7c1-7990-4305-acb1-1c2e07599f221579686475599-Gini-and-Jony-Boys-T-shirt-581579686473192-1.jpg">
	<h1>J&J Baby T-shirts</h1>
	<h1>$200</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://images-na.ssl-images-amazon.com/images/I/71-hA1LdKZL._UL1271_.jpg">
	<h1>Peter England Baby's outfit</h1>
	<h1>$200</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>Children's clothing is often more casual than adult clothing, fit for play and rest. Hosiery is commonly used. More recently, however, a lot of childrenswear is heavily influenced by trends in adult fashion. Due to the rise of social media platforms such as Instagram, celebrities and fashion bloggers have been using their accounts to post pictures of their children wearing luxury "street style" clothing, thus inspiring parents to dress their children as they would dress themselves. Children's clothing is care about their health. Good quality, well designed, garments are now a priority for a growing number of parents and children's clothing is getting a prime place in top label stores and high-end fashion retail outlets. Dresses are also getting separately designed for boys and girls at a very early age.
    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://ae01.alicdn.com/kf/HTB12YO5X.vrK1RjSspcq6zzSXXaA.jpg_q50.jpg">
<h4>Baby's Full Suit comming Soon!!!</h4>

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