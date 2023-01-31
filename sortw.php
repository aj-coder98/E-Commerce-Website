<?php
    include 'header.php';
    include 'session.php';
?>


<body class="row" >
<h3>Search Results</h3>

	<?php

         	$Search = mysqli_real_escape_string($conn, $_GET['search']);
         	$sql = "SELECT * FROM product WHERE UPPER(name) LIKE UPPER('%$Search%') OR  UPPER(p_type) LIKE UPPER('%$Search%') HAVING category LIKE 'women'";
         	$result = mysqli_query($conn, $sql);
         	$queryResults = mysqli_num_rows($result);

         	if($queryResults > 0){
               echo "<h3> There are following results: </h3>";
         		echo"<h2> Categorize By : &nbsp; <a href='sortw.php? search=".$Search."' style='text-decoration: none;'> Women &nbsp; </a> <a href='sortwp.php? search=".$Search."' style='text-decoration: none;'> Price &nbsp; </a> </h2>" ; 
               while($row = mysqli_fetch_assoc($result)){

         			 echo "<div id='content' class ='item col-lg-4 col-md-6 col-sm-12'> <section id='product'> <a href= 'product.php? p_name= ".$row['name']." && p_id=".$row['id']."' style='text-decoration: none;'>

               	<img src = ".$row['link']." class='size'>
                  <h3>".$row['name']."&nbsp;".$row['p_type']."</h3>
                  <p>".$row['category']."</p>
                  <p> Price: $ ".$row['price']."</p>
               </a> </section> </div>";

         		}
                                      
         	}else{
         	     echo "<br> There are no Results matching your search </br>";
         	}
         

	?>
</body>
</html>