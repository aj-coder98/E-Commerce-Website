
<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_clothes Shirt</title>
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

<p><a href="proj.php">Home</a> > Womens > Clothes > Shirt</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ9isWRzN37gPIC70TxN1NPssJOaUsxHtFbzncanMdSco4lph2HvPa8vCj-SLXwATREoA_BOQDPLK8ZltORadpPg5Z_smpmQsFEkBtHijca&usqp=CAE">
	<h1>Mizago Bishop Sleeve Shirt</h1>
	<h1>$10</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR-gHj-T0RsCwundrJ4luy2O_9zpsuScDYg1Cqomgf8PHQnqRZtQ9sJORt_SJ5TASAM6a8jgEbjCNB-iTI2fUhNIhfYncGD4ODqzP7cMM9r72_UTw_B5xlQ&usqp=CAE">
	<h1>V2 Kart Plain Casual Shirt</h1>
	<h1>$3.2</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSPV59Qu_UFiLsWQpkiEgmoCxIF4P_3oHeT4bEMrkUOOJj4BSZ685BSynTHjpDFBfQXkyDMHs3CJfRcnTXX0JDCaxlwmv9iwe7TOMCgQic&usqp=CAE">
	<h1>Blue Pin Shoulder Shirt</h1>
	<h1>$12.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcToWoIn9d5vmLXM1xulUvwPkTbTFTO_o89fw3P_odFkKwjqpuHkKfDqtkF0k3WiB-UdFsPum34Jzey2oyNyivNbtU7zTVch-n8kvR6UUvs&usqp=CAE">
	<h1>Ladybird Casual Blue Shirt </h1>
	<h1>$7</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRlEB_ikrWCW85KCl3NJkt6aqmpcThkNhqPOoJsapIgo8X3xIvSoac6O5Gn2GqB3PGxxqnDVULsyjWLShoGZQ0zeHwi_Lf5x83xBiRoSk6qQ0IqiNwDmNvF&usqp=CAE">
	<h1>Tokyo Talkies White Strip Shirt </h1>
	<h1>$5.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRHjYN2lR5u6hzP-YCauqARuyIEqfd1NUYIOHD5OTdp3BqmGGYA4jfs7o6LMImYb9t1tv0cEgJ5xaGSKBUrfbXH6l67LYgzP81UjJ38O-WL&usqp=CAE">
	<h1>Itkiutki Casual Green Shirt</h1>
	<h1>$10</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>A shirt is a cloth garment for the upper body (from the neck to the waist).
Originally an undergarment worn exclusively by men, it has become, in American English, a catch-all term for a broad variety of upper-body garments and undergarments. In British English, a shirt is more specifically a garment with a collar, sleeves with cuffs, and a full vertical opening with buttons or snaps (North Americans would call that a "dress shirt", a specific type of collared shirt). A shirt can also be worn with a necktie under the shirt collar.

    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT1HIoVm7sGDVCxrhnRUWhGkBAzp06kBwcJzE1qXw2hSBIyIoE5nhIoSNi6gSWkRfa2ZhSVaZbsWbLIiR493d1k_wnpMwSM8s7Ied4KX3aeh2NnARSHEDPckw&usqp=CAE">
<h4>Check out our beautyful range of Febrange Formals</h4>

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