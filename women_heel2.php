<?php
 include 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>woman_j2</title>
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
	<section class="pic16">

	</section>
	<section class="pic17">
		
	</section>
	<section class="pic18">
		
	</section>
</section>
<section class="descr">
	<p>Description</p>
	<h1>Midsole Womens Velvet Western Heels </h1>
<h1>Fashion Sandals</h1>
	<ul>
		<li>* Sole: rubber</li>
<li>* Closure: Zip</li>
<li>* Shoe Width: Medium</li>
<li>* Material: Velvet; Closure: Zip</li>
<li>* Heel Type: Western Heel</li>
<li>* Care Instructions: Removing Dust And Dirt Should Only Be Done Through Clean And Dry Cloth.
</li>
<br>
</ul>
<h2>Final Price: $620</h2>
<img src="https://seeklogo.com/images/F/free-delivery-logo-3F8F5B428D-seeklogo.com.png">
<img src="https://thumbs.dreamstime.com/b/assured-quality-stamp-assured-quality-stamp-white-168913617.jpg">
<img src="https://media.istockphoto.com/vectors/return-of-goods-within-7-days-icon-7-days-on-white-background-blue-vector-id867232580?k=6&m=867232580&s=170667a&w=0&h=W1c3PoDpDINLGjhmT21sVRkUfmaV6h0KAadACDd_2_I=">
<button class="cart">Add to cart</button>
<button class="buy" onclick="window.location.href='buy_women_heel2.php'">Buy</button>
</section>
<section class="revi">
<section class="review">
	<h1>What our customer says</h1>
	<p>aj@1998: very nice product.</p>
	<p>kp#981: best product</p>
	<p>halp#981: Good quality and packaging</p>
	<p>typ#781: avg one should not buy</p>
	<p>monl91: Good quality</p>
	<p>kalla81: very nice product love it</p>
	<p>popo#901: Poor packaging</p>
</section>
<h1 class="rat">Ratings</h1>
<section class="rating">
	<p>4.6/5</p>
	<p>Quality</p>
</section>
<section class="rating">
	<p>4.5/5</p>
	<p>Durable</p>
</section>
<section class="rating">
	<p>4.7/5</p>
	<p>Overall</p>
</section>
</section>
</section>
<section class="relpro">
<h2>Related products</h2>
<section class="related">
<a href="cat_women_jeans.php">
<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSVrnpomx3nlr23QpHIouwIBHgZ-lUpK1cwXJNbS7T9OzP9EiV_joJLCAL9KI7MN05QGcyNC47KdPmUZaUeTFMZ0rU3nuhyGh7sP_W8in-EqM4bPewrathh&usqp=CAE">
</a>
</section>
<section class="related">
<a href="cat_women_jeans.php">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQGmczfk8qt7j7bEnahOigXZ6oPRR0d1F44JxPA43vns6MRvvXwviycDrIOWM6duNCVBMazj0yO03jshtSEiSAXpTe7f2MH56F6hkcOa84ZkTfoslRjn-T8&usqp=CAE">
</a>
</section>
<section class="related">
<a href="cat_women_jeans.php">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRpx0FIoDnyN-Vkm1tgGFVMQzU5EFafeWyiuZzxt41KDxQdwAsFng5M_ceh3CsJsldJhVU-vtdEm3nxyFY5l8Trgky72cdOvdpzWaIEahN6irG6O-ZLwbpQ&usqp=CAE">
</a>
</section>
<section class="related">
<a href="cat_women_jeans.php">
	<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSUzT_Nsk4aFxjfWviyjZjxj1erVdw728KOTSGxxr3SCCMbHQCvzRgm96rZv8VSIQadoEKnRR3q2USyo-VTP-iMMydMGBPzjMEXjy9jwTqP3BWCKwmRYCICvQ&usqp=CAE">
</a>
</section>
<section class="related">
<a href="cat_women_jeans.php">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQW159UYCYfbgMzw7SBzBaS05xSqs1WbDdYHtJfWLWBg4VtPoq3HZj4ouorq-bHxhm1U08Cy9lfcanlW1RlE5uRX5vA33dUxskcr88L7bMJCkE1Ak7laTGBGg&usqp=CAE">
</a>
</section>
<section class="related">
<a href="cat_women_jeans.php">
	<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQW159UYCYfbgMzw7SBzBaS05xSqs1WbDdYHtJfWLWBg4VtPoq3HZj4ouorq-bHxhm1U08Cy9lfcanlW1RlE5uRX5vA33dUxskcr88L7bMJCkE1Ak7laTGBGg&usqp=CAE">
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