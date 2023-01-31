<?php
    include 'header.php';
   include 'session.php';
?>

<body class="row" >
<h3 >Search Results</h3>

	<?php

         if (isset($_POST['Submit-Search'])) {
         	$Search = mysqli_real_escape_string($conn, $_POST['Search']);
         	$sql = "SELECT * FROM product WHERE UPPER(name) LIKE UPPER('%$Search%') OR  UPPER(p_type) LIKE UPPER('%$Search%')";
         	$result = mysqli_query($conn, $sql);
         	$queryResults = mysqli_num_rows($result);

         	echo "<h3 > There are ".$queryResults." results </h3>";

         	if($queryResults > 0){
         		echo"<h2>Categorize By : &nbsp; <a href ='sortm.php? search=".$Search."' style='text-decoration: none;'> Men &nbsp; </a> <a href='sortw.php? search=".$Search."' style='text-decoration: none;'> Women &nbsp; </a> <a href='sortk.php? search=".$Search."' style='text-decoration: none;'> Kids &nbsp; </a> <a href='sortp.php? search=".$Search."' style='text-decoration: none;'> Price &nbsp; </a></h2>" ;
               while($row = mysqli_fetch_assoc($result)){

         			 echo "<div id='content' class ='item col-lg-4 col-md-6 col-sm-12'> <section id='product'> <a  href= 'product.php? p_name= ".$row['name']." && p_id=".$row['id']."' style='text-decoration: none;'>         			 
               	<img src = ".$row['link']." class='size'>
                  <h3>".$row['name']."&nbsp;".$row['p_type']."</h3>
                  <p>".$row['category']."</p>
                  <p> Price: $ ".$row['price']."</p>
               </a> </section> </div>";

         		}
                                      
         	}else{
         	     echo "<br> There are no Results matching your search </br>";
         	}
         }

	?>

</body>
</html>
