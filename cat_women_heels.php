<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_Footwear Heels</title>
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

<p><a href="proj.php">Home</a> > Womens > Footwear > Heels Special</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<div class="s1001">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQGK7ynw1s4PDAdSvx2sqYC5EWIewP_Yj9toptlxSlV3oysz177ii861WCb5T5Iw829DTlXgYucKs1CxyHtAxXzCnFvmmPiBTasQFTnbij76wGwzG7qs6WP6A&usqp=CAE">
	<h1>Woman Fashion Sandal</h1>
	<h1>$8</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	</div>
	<div class="s1002">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT0jCudjwYzYmyJub2bFFFLWcTqSAE_lxlRUIm4HgHHRYvDNLP46COWMOvS3PskoStKkrttziAzxYva0i-4bmhbW-mmmnjl_2C5uDkLtlcOPbho7heuqBLZKQ&usqp=CAE">
	<h1>Cat walk Golden Sandal</h1>
	<h1>$8.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
	<div class="s1003">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR_VBEAV4rwlMua_ss7B5gYDIdMq_iyIFT2DlSxSM-ye4NZXb5xDBlVcE-5JsNswj8Zos_JdsmTBYv2G7FbYIoGf76WHI64Eo2furlvAzr5WtqHMm16F7kamA&usqp=CAE">
	<h1>RGK Woman Fashion Sandal</h1>
	<h1>$7</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQGB66pGVvO600XSYBpPFPuOABWcalwDmOQhfGykirlJqomLp_ISrB7sY5GFdnEUZBLmVjVCPnvTcNOil1AnUhkE1AS7_7MxvVDs3nfjyKLv8gAX37I1nYovw&usqp=CAE">
	<h1>Dressbury Woman Embroided Heels</h1>
	<h1>$19</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <a href="women_heel2.php">
    <div class="s1005">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTxcN5uPg2HvQjfV-kMsnTY6C6qqKSgBIYmSrj_G6r_GVLGZ5FFjUksMRVpEOpxR-SeD1mlxTSBd2Pz2zNFQoekn0ernDOH9OA_-O7Gs_roP9MVdOnA8ebtTQ&usqp=CAE">
	<h1>Denil Woman Black Sandals </h1>
	<h1>$4</h1></a>
	<button>Add to cart</button>
	<button onclick="window.location.href='buy_women_heel2.php'">Buy</button>
	
	</div>

    <div class="s1006">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQxFSM014eqz_PB_1qEKtWiuofAJzXV_HQ8glAlB3KFH4dJm0ykFQuuMQ17oUlQb9CjZXqcAzG_VBU63G8Sj80bNS4-GC_Q9P7NpzlAOv7mvChzFc8ikYk4Fw&usqp=CAE">
	<h1>Toshina Beige Heels</h1>
	<h1>$6</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>


	<div class="content">
		<b>About Cat:</b>

		<i>heels are a type of shoe in which the heel, compared with the toe, is significantly higher off the ground. They make the wearer appear taller, accentuates the muscle tone in their legs and makes their legs appear visibly longer.[1] There are many types of high heels, which come in different styles, colors and materials, and can be found all over the world. They have significant cultural and fashionable meanings attached to them, which have been largely shaped by historical contexts over the past 1,000 years. Wearing high heels is associated with some health problems or for getting more height to get an attractive look.
    </i>
    
    </div>
</section>

<section class="filter">
<div class="inner">
<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQKC3N8OWHo-f6h-mQ7hBzTwSkIIVPD2FX6RoAf1torIfl1CkEFoDsBCRSyO-yMoEBzcer7RdPH_MDwu9MYqp5zqyPjKLe-qs54L0nz3J-sznkqhmfsviHE6A&usqp=CAE">
<h4>Check out our new  Catwalk Shimmery Gladiator Stilletos</h4>

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