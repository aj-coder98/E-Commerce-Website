
<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_kurta Womens</title>
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

<p><a href="proj.php">Home</a> > Womens > Clothes > Kurta</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRLIxKPI1V0YWPhLHbiMs1c972OKvYQToe79zAxNMN8sfasUa4mLl5kCAQsH4O1_OIhZZ1dYwHZa_D7q2HP9_ggGO2upMVqEEDKCpEKDvWR&usqp=CAE">
	<h1>Peach Layered Kurta</h1>
	<h1>$18.27</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSHPXH0SAt7bJ3_s2fML2IcJLkKE8UMQmftOxHdcUdnLRJ6oV-RMJoN0dITRsNESP_1pLoOfVkTOLJpjyduEWF-_dOKUsDrg9VLcXsy_1mJ&usqp=CAE">
	<h1>Navy Blue Printed Kurta</h1>
	<h1>$19</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRODKmhhzAvuT338cu667vnk5gQ2S9gp_5YxtTlYnu89VkBS_wJphO6Q1AYcU-D97D1varE7qDI66xTzeouJmIMgt5uJdtfT00xHFun1cHiiC3ds55nKUH3uQ&usqp=CAE">
	<h1>Aurelia White Printed Kurta</h1>
	<h1>$4.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQZIRzVhzz8ttrsRyzc6AsZCgnEQtPiMBks_zycwZv1T5Jbont-E9Wi2LFl6ZxPUlq93t1XEDnYkqZsbZtwzBu-uQlptfD0gJeUsaWa2uah6dalyZKFprWC&usqp=CAE">
	<h1>Sera Polka Dot Kurta</h1>
	<h1>$18.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRd20XCR4_Eryjj4vrE8Cvz3uCUB_KHZuZ-cETOUFpPEpNxD7hM85ey08zjwSPZtQxfljXgxN0TxVqtioFIrrMlSwds_MfN1AkNrmtVo7wRCIdvlco3isH5&usqp=CAE">
	<h1>Vastranikhar Plain Kurta </h1>
	<h1>$10</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTWYbW6taMFxXnWk1mSUJfBS4ufosMzEsfpzox_Tw6B4MPsyCglgrJ72HqGgfVgZ1dWhELDaqTz48AGMmXcyURgHkpcEHhOjVUhqOa2DBBp&usqp=CAE">
	<h1>Flevia Creation Fit</h1>
	<h1>$12</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>A kurti is a loose collarless shirt worn in many regions of South Asia, and now also worn around the world.[3] Tracing its roots to Central Asian nomadic tunics, or upper body garments, of the late-ancient- or early-medieval era, the kurta has evolved stylistically over the centuries, especially in the South Asia, as a garment for everyday wear as well as for formal occasions.
The kurta is traditionally made of cotton or silk. It is worn plain or with embroidered decoration, such as chikan; and it can be loose or tight in the torso, typically falling either just above or somewhere below the knees of the wearer.[3] The front and back of a traditional kurta are made of rectangular pieces, and its side-seams are left open at the bottom, up to varying lengths, to enable ease of movement.[3] The sleeves of a traditional kurta fall to the wrist without narrowing, the ends hemmed but not cuffed; the kurta can be worn by both men and women; it is traditionally collarless, though standing collars are increasingly popular; and it can be worn over ordinary pajamas, loose shalwars, churidars, or less traditionally over jeans.

    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTGIZRu7Q6JzlTLBH6Tiz5D-aU1A3nr3olG980Ui5y4JIkYdD8tg788kqrL8kFmz21QOZRGzd_99Dj7uEYCQRlVdsbxjggMDnRPw9FLb3Q&usqp=CAE">
<h4>Check out our new exciting brands for printed Kurtas</h4>

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