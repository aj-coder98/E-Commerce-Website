<?php 
include'session.php';
?>
<html>
<head>
<title>AJ FIRM</title>
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


<section class="in" id="home">
<section class="slider">
	
</section>
</section>

<section class="bestsale" >
<p>BEST SALES</p>
</section>		

<section class="bs2">
	<div class="inner">
 <a href="#">
 <div class="card">
        <div class="card-image"></div>      
        <div class="card-text">
        <span class="date">Jbl headphone<br>$300</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>
</a>
 <div class="card">
        <div class="card-i"></div>
        <div class="card-text">
        <span class="date">Safari bag</span>
         </div>
        <div class="card-stats">
        ORANGE.COM	
        </div>

</div>
</div>
<div class="inner">
 <div class="card">
        <div class="card-im"></div>
        <div class="card-text">
        <span class="date">Silk saree<br>
        $300</span>
         </div>
        <div class="card-stats">
        ORANGE.COM
        </div>

</div>

 <div class="card">
        <div class="card-ima"></div>
        <div class="card-text">
        <span class="date">Puma shoes<br>$100</span>
         </div>
        <div class="card-stats">
        ORANGE.COM
        </div>

</div>
</div>
</section>

<section class="bestdeals">
<div class="inner">

 <div class="card">
        <div class="card-imag"></div>
        <div class="card-text">
        <span class="date">Fastrack Reflex 2.0<br>$30</span>
         </div>
        <div class="card-stats">
        ORANGE.COM
        </div>

</div>

 <div class="card">
        <div class="card-imagee"></div>
        <div class="card-text">
        <span class="date">Allen Solly Shirts<br>$100</span>
         </div>
        <div class="card-stats">
       ORANGE.COM
        </div>

</div>
</div>
<div class="inner">
 <div class="card">
        <div class="card-imagel"></div>
        <div class="card-text">
        <span class="date">One Plus 6T<br>$80</span>
         </div>
        <div class="card-stats">
        ORANGE.COM
        </div>

</div>

 <div class="card">
        <div class="card-imagex"></div>
        <div class="card-text">
        <span class="date">Philips Headphone<br>$50</span>
         </div>
        <div class="card-stats">
        ORANGE.COM
        </div>

</div>
</div>

</section>

<section class="bd2">
<h1><i>BEST DEALS</i></h1>
</section>


<section class="brands">
<p>OUR BRANDS</p>
	<div class="card middle">
		<div class="front">
			<img src="https://cdn.shopify.com/s/files/1/0153/8863/files/JBL-logos.jpg?8438377206201700231">

		</div>
		<div class="back">
			<div class="back-content middle">
				<img src="https://images.unsplash.com/photo-1564424224827-cd24b8915874?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80">
				
		</div>
	</div>
</div>
	<div class="card middle">
		<div class="front">
			<img src="https://content.nike.com/content/dam/one-nike/globalAssets/social_media_images/nike_swoosh_logo_black.png">

		</div>
		<div class="back">
			<div class="back-content middle">
				<img src="https://i.pinimg.com/originals/bb/86/84/bb8684197fe4e5859c92dd795fa109c8.jpg">
				
		</div>
	</div>
</div>
	<div class="card middle">
		<div class="front">
			<img src="https://www.supernova-zadar.hr//fileadmin/shared/logos/Levis.png">

		</div>
		<div class="back">
			<div class="back-content middle">
			<img src=  "https://image.freepik.com/free-vector/buy-one-get-one-free-promotional-tag-vector_53876-43748.jpg">
		</div>
	</div>

</div>

	<div class="card middle">
		<div class="front">
			<img src="https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/743/cached.offlinehbpl.hbpl.co.uk/news/OMC/57527B03-B575-D209-FA4C8F63CC0F155C.jpg">

		</div>
		<div class="back">
			<div class="back-content middle">
		
		      <img src="https://previews.123rf.com/images/houbacze/houbacze1801/houbacze180100539/93570708-banner-deal-of-the-day.jpg">		
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://assets.mspimages.in/wp-content/uploads/2018/09/Xiaomi-logo-696x435.jpg">

		</div>
		<div class="back">
			<div class="back-content middle">
			  <img src="https://thumbs.dreamstime.com/b/midnight-sale-neon-light-wall-banner-blinking-sign-style-166159592.jpg">	
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://i.pinimg.com/originals/41/5f/39/415f39c9ca07de4c7d9c4c89c67f086c.png">

		</div>
		<div class="back">
			<div class="back-content middle">
	         
	         <img src="https://cdn.shopify.com/s/files/1/0153/5688/7140/files/Logo_Amazing_deal_4_you_1200x1200.jpg?v=1558749718">	
				
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://www.designyourway.net/blog/wp-content/uploads/2019/11/s1-10.png">

		</div>
		<div class="back">
			<div class="back-content middle">
				<img src="https://media.gucci.com/style/DarkGray_Center_0_0_490x490/1507824006/499621_K05NG_8745_001_065_0000_Light.jpg">
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2016/09/05/498331-woodland-screengrab.png">

		</div>
		<div class="back">
			<div class="back-content middle">
				<img src="https://previews.123rf.com/images/serkorkin/serkorkin1705/serkorkin170500042/78351739-50-off-discount-creative-vector-banner-illustration-abstract-promotion-concept-layout-special-offer-.jpg">
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://i.pinimg.com/originals/6d/3b/3b/6d3b3be4d1add6129c4209821be4b1e3.jpg">

		</div>
		<div class="back">
			<div class="back-content middle">
				<img src="https://imgstaticcontent.lbb.in/lbbnew/wp-content/uploads/sites/1/2015/07/Sale-Sale-Everywhere-02.png">
				
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://logos-download.com/wp-content/uploads/2016/03/Lenovo_logo_red.png">

		</div>
		<div class="back">
			<div class="back-content middle">
				
				<img src="https://i.pinimg.com/originals/bb/86/84/bb8684197fe4e5859c92dd795fa109c8.jpg">
		</div>
	</div>
</div>
<div class="card middle">
		<div class="front">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/1024px-Samsung_Logo.svg.png">

		</div>
		<div class="back">
			<div class="back-content middle">
			<img src="https://www.kindpng.com/picc/m/736-7363550_buy-2-get-1-free-png-transparent-png.png">
				
		</div>
	</div>
</div>

<div class="card middle">
		<div class="front">
			<img src="https://www.dafont.com/forum/attach/orig/4/3/433135.png?1">

		</div>
		<div class="back">
			<div class="back-content middle">
		<img src="https://images-na.ssl-images-amazon.com/images/I/81N5j6O7p8L._UL1500_.jpg">		
		</div>
	</div>
</div>
</section>

<section class="fresh">
<p>FRESH ARRIVAL</p>
</section>

<section class="f2">
	<div class="inner">

 <div class="card">
        <div class="card-imagef"></div>
        <div class="card-text">
        <span class="date">Ladies Watch <br>$10</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>

 <div class="card">
        <div class="card-imager"></div>
        <div class="card-text">
        <span class="date">Ladies Slipper<br>$30</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>
</div>
<div class="inner">
 <div class="card">
        <div class="card-imageh"></div>
        <div class="card-text">
        <span class="date">Woodland Shoe <br>$50</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>

 <div class="card">
        <div class="card-imagem"></div>
        <div class="card-text">
        <span class="date">New YOGA series laptops<br>$1000</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>
</div>
</section>
<section class="poster">
<img src="https://images.unsplash.com/photo-1587466412525-87497b34fc88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=753&q=80">
</section>
<section class="pos">
<h1><I>ALL NEW CLASSIC CASSIO WATCH</I></h1>
<h6>Available only on ORANGE.COM</h3>
<button>Shop Now</button>

</section>

<section class="cloth">
<div class="inner">

 <div class="card">
        <div class="card-image1001"></div>
        <div class="card-text">
        <span class="date">Mizago Sleeve shirt<br>$120</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>

 <div class="card">
        <div class="card-image1002"></div>
        <div class="card-text">
        <span class="date">Dressbury Woman heels<br> $19</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>
</div>
<div class="inner">
 <div class="card">
        <div class="card-image1003"></div>
        <div class="card-text">
        <span class="date">Manyawar Kurta<br> $1000</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>

 <div class="card">
        <div class="card-image1004"></div>
        <div class="card-text">
        <span class="date">Nike Shoes<br> $499</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>
</div>

</section>

<section class="cl2">
<p>CLOTHES AND FOOTWEAR</p>
</section>
<section class="electronics">
<p>ELECTRONICS</p>
</section>

<section class="ec2">
<div class="inner">

 <div class="card">
        <div class="card-image1"></div>
        <div class="card-text">
        <span class="date">Cannon DSLR<br>$900</span>
         </div>
        <div class="card-stats">ORANGE.COM</div>

</div>

 <div class="card">
        <div class="card-image2"></div>
        <div class="card-text">
        <span class="date">Samsung Smart Tv<br>$800</span>
         </div>
        <div class="card-stats">
        	ORANGE.COM
        </div>

</div>
</div>
<div class="inner">
 <div class="card">
        <div class="card-image3"></div>
        <div class="card-text">
        <span class="date">Blackberry Phone <br>$150</span>
         </div>
        <div class="card-stats">
        	ORANGE.COM
        </div>

</div>

 <div class="card">
        <div class="card-image4"></div>
        <div class="card-text">
        <span class="date">Home Entertainment<br>$700</span>
         </div>
        <div class="card-stats">
        	ORANGE.COM
        </div>

</div>
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