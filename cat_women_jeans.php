<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>categories_clothes Jeans</title>
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

<p><a href="proj.php">Home</a> > Womens > Clothes > Jeans</p>

</section>
<section class="move">

<marquee>
	<b><p>Dont worry while shopping ,you will get your product before time and with excellent safety measures.</p></b>
</marquee>
</section>
<section class="shirts">
	<a href="woman_j1.php">
	<div class="s1001">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQKxjSVnRuzvtqnzXhcFN3aJu_vpqlXHtQ1Mt0poOyWL_VeNCDd8_yv_TUsv9zhKW7jiDepSVNLti-Ubg9TjG79SP5bemHfcU8h3bXZMIHeHEkqB3MOTBDQRDs&usqp=CAE">
	<h1>Medium Stone Jeans</h1>
	<h1>$7</h1></a>
	<button>Add to cart</button>
	<button onclick="window.location.href='buy_woman_j1.php'">Buy</button>
	</div>
	<div class="s1002">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSFqdZfv-F4uLG8Lc0LBxqemhTJMHYFSSzYGQ7RDI_dV998oVUb4SvaNOC8JmKfgDQVozmL9gnNwA4n89WX0u6BgfXy0YV-qXLV9KwEqV_x7GqoLtMrXTyJ&usqp=CAE">
	<h1>V2 Kart Dark Blue Jeans</h1>
	<h1>$4</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>

	<div class="s1003">
	<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSVrnpomx3nlr23QpHIouwIBHgZ-lUpK1cwXJNbS7T9OzP9EiV_joJLCAL9KI7MN05QGcyNC47KdPmUZaUeTFMZ0rU3nuhyGh7sP_W8in-EqM4bPewrathh&usqp=CAE">
	<h1>Ginger Solid Slim Fit Jeans</h1>
	<h1>$10.5</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1004">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRpx0FIoDnyN-Vkm1tgGFVMQzU5EFafeWyiuZzxt41KDxQdwAsFng5M_ceh3CsJsldJhVU-vtdEm3nxyFY5l8Trgky72cdOvdpzWaIEahN6irG6O-ZLwbpQ&usqp=CAE">
	<h1>Here&Now Skinny Fit Jeans</h1>
	<h1>$12</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1005">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSUzT_Nsk4aFxjfWviyjZjxj1erVdw728KOTSGxxr3SCCMbHQCvzRgm96rZv8VSIQadoEKnRR3q2USyo-VTP-iMMydMGBPzjMEXjy9jwTqP3BWCKwmRYCICvQ&usqp=CAE">
	<h1>Xee Skinny Black Jeans </h1>
	<h1>$9</h1>
	<button>Add to cart</button>
	<button>Buy</button>
	
	</div>
    <div class="s1006">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQW159UYCYfbgMzw7SBzBaS05xSqs1WbDdYHtJfWLWBg4VtPoq3HZj4ouorq-bHxhm1U08Cy9lfcanlW1RlE5uRX5vA33dUxskcr88L7bMJCkE1Ak7laTGBGg&usqp=CAE">
	<h1>Kotty Regular White Jeans</h1>
	<h1>$8.1</h1>
	<button>Add to cart</button>      
	<button>Buy</button>
	
	</div>

	<div class="content">
		<b>About Cat:</b>

		<i>Jeans are a type of pants or trousers, typically made from denim or dungaree cloth. Often the term "jeans" refers to a particular style of trousers, called "blue jeans", which were invented by Jacob W. Davis in partnership with Levi Strauss & Co. in 1871 and patented by Jacob W. Davis and Levi Strauss on May 20, 1873. Prior to the Levi Strauss patented trousers, the term "blue jeans" had been long in use for various garments (including trousers, overalls, and coats), constructed from blue-colored denim.
"Jean" also references a (historic) type of sturdy cloth commonly made with a cotton warp and wool weft (also known as "Virginia cloth"). Jean cloth can be entirely cotton as well, similar to denim. Originally designed for miners, modern jeans were popularized as casual wear by Marlon Brando and James Dean in their 1950s films, particularly The Wild One and Rebel Without a Cause leading to the fabric becoming a symbol of rebellion among teenagers, especially members of the greaser subculture. From the 1960s onwards, jeans became common among various youth subcultures and subsequently young members of the general population. Nowadays, they are one of the most popular types of specialty trousers in Western culture.

    </i>
    
    </div>

</section>

<section class="filter">
<div class="inner">
<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQGmczfk8qt7j7bEnahOigXZ6oPRR0d1F44JxPA43vns6MRvvXwviycDrIOWM6duNCVBMazj0yO03jshtSEiSAXpTe7f2MH56F6hkcOa84ZkTfoslRjn-T8&usqp=CAE">
<h4>Check out our new Plain Tapered/Carrot Jeans</h4>

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