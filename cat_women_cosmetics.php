<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories Cosmetics</title>
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

<p><a href="proj.php">Home</a> > Womens > Cosmetics</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQS9e5ebjJY40ASu7VHmTzwqh224ctGcz7IfRoZpoOtMg7RF18_Vbusd0x2531N-smJLWTGrsJ8HtUgnc1hNzZ2ohW7mUkGRo5aOqnX91Iquj4wU2fBZmOD&usqp=CAE">
	<h1>Elle 18 Matte Lipstick</h1>
	<h1>$1</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQNa4CkOMjVUwZWPEhXxhuJJB7EXKLDqlVwOkKxISlGQalVLlxQ3mD8yeMXZlbnPl5jUcDR8XmDkEOfHDnPdQ7vIw8WYPk5t-1eZJ1PBscpEMNMZ7tySQtxCw&usqp=CAE">
	<h1>Miss Rose Brand Matte Lipstick</h1>
	<h1>$2</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRBxYgAzo7Clgx1y-pMaaY7u6UwQxg8_86WWzVN0aohLXAtqJlW142EvaMcaMatrF7Mq4CiHmChc5KRTLGozRenNY5KFO-m8U0Z61rmFc6nHVE2Px7tecN3wg&usqp=CAE">
	<h1>Women's Make-up Vanity Kit</h1>
	<h1>$7.2</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ5ICYElES5Cm1I9rRDMix439XZVIeBSJpZ9GjYN81HT4ZWbNrn8VSMUnW01bvSKT-e7iQBhCNyyq3E7oTCAkgJEj3LyzI_w-eDN5oF00Sj8-mh0l6kxoy4&usqp=CAE">
	<h1>Beauty Rose Gold Eye Shadow</h1>
	<h1>$4.2</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSQtCgUXHiks4yDBdk8SIul_l5aRrlEJ3r-hfZdi8J6Ju3LN4buZEyRZBIGNSMIUrROGkdsU23BrvtH6x11htRaWvovW3xNtDwPEx4_cGw&usqp=CAE">
	<h1>Ny Bae Creamy Matte Lipstick </h1>
	<h1>$1.02</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSM_7_cwsYBsfzXcE2L_1Y2EQoi_2zAjO5ENRqsziCDBQxERU5hBWuAgjX4fx2f4SL82uwo0HI3gctFbt8IBUDdZZw4fBZaoG10o46FsNOyv4ju17tTpzS-sw&usqp=CAE">
	<h1>Lakme Enrich Matte Lipstick</h1>
	<h1>$4</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>Cosmetics are a category of health and beauty products that are used to care for the face and body, or used to accentuate or change a person's appearance. Though cosmetics are commonly thought of as only makeup used to alter a person's appearance, cosmetics can also refer to a number of products used to care for the skin and the body, as well as those used to add fragrance to it. There are a large number of cosmetics available under these various categories, each designed for different purposes and featuring different characteristics.
    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTOSRSlQ2cTgnJMwpLrIT1iVOIWGIZq_vRnjh9BTdrnx7uKSpjcHjT7-cqH5VNPrIz1RH8CN8Z00ZpABvQ55NZ_yPZwzL145sQ1IKD9EHlDlYQI1ciXJtIbzw&usqp=CAE">
<h4>Check out our new Natio Bountiful Skin Kit</h4>

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