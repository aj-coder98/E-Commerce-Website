
<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_accessories Purse</title>
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

<p><a href="proj.php">Home</a> > Womens > Accessories > Purse</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcS6GH_vZBVgYtqg5Xa1yvnKDSrgefV3g9zgzurfaKBzJVDAihOiP3zrZhz_ebAvN0pIX8Hq60kNTmrzcmDolQRl3VyytAbdEhiO16BQ_9mKvTvW8z7pFkiZKw&usqp=CAE">
	<h1>Dune London Medium Tone</h1>
	<h1>$101</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRxy5qLsssJSAynLmQRQ6gH3a80KziaqJKh7E6x9kVHPuWt1eglmvaS0_czjc-l8nzav30oT_pEMIImcpqVUcJY2vqlBL2VytKQ_I-aKmI&usqp=CAE">
	<h1>Shining Star Handbag</h1>
	<h1>$20</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT_zN_aM1kKUTdNNpjj64J-lvMdKd2WAFs7JyFT3uLRcJHiYFkjBDX4D65aKRXu9fqsQN2zfjCo10F8RhR_aFajaD7Eml2AMsNcJkePdSL-t9y5fEuRDUXA&usqp=CAE">
	<h1>Fastrack Pink Shoulder Bag</h1>
	<h1>$5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTRQeiDY5QkR73_RShMebX8WKJsx3gN3vAVjx7m2SFVP4xSUWZuqg-666gqt2X7aP-iS_J94N4yrS_0w2HPZLLVU0Ztg8_8wgXagjnNMJcC&usqp=CAE">
	<h1>Miniso Sling Bag</h1>
	<h1>$8</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQQtOwiiNJjF_Lt3la8vQC99TZzZeUUj1xXRLEjSP03s3o_NbBx1MCvKbjJvefZ4szrkzDxt2VZehez_YQJ2MaspntakI5jjIasuMsVgXVV&usqp=CAE">
	<h1>Miniso Blue Shoulder Bag </h1>
	<h1>$7.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT-pXhw2ZtiBsMxX6ddlFUOlA_yPETi-rd3MYbutii_fm9d_HMIYBerJjxGS56RRYUmCk5m4pIgQnBKSd60O3VNZA37-zgEn5w1-QXcQf-6N3iiJ8R0bbJwUg&usqp=CAE">
	<h1>Miraggio Phoebe Crossbody Bag</h1>
	<h1>$15</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>A purse is a small bag that may refer to:
•	Coin purse, small pouch made for carrying coins
•	In British English, currency notes, credit cards, and other ID cards
•	Handbag, in American English
•	Money bag
•	Wallet

    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSE93bwFrRkx4HWV93yKCoUK_X3VJ4zZ2KTjI8jhaW0WSWSOqTl_zrNUhmCMo6QYO3uN-L1ve8iW7qe_-Lcu3-qMmlmxCQX6kHHUbuSqn9_Ffx3jGYL3eQjm6I&usqp=CAE">
<h4>Check out our new Chanel Structured Logo Crossbody</h4>

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