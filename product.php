<?php
    
    include 'header.php';
    include 'session.php';
?>

<body>


		<h3>Your Product </h3>
		<?php
            $p_name = mysqli_real_escape_string($conn, $_GET['p_name']);
            
            if (isset($_GET['p_id'])){

            $id = mysqli_real_escape_string($conn, $_GET['p_id']);

               }
               else {
                echo "p_id is not woeking";
               }

            $sql = "SELECT * FROM product WHERE UPPER(name) LIKE UPPER('$p_name') OR id = '$id'";
            $result = mysqli_query($conn , $sql);
            $queryResults = mysqli_num_rows($result);

            if( $queryResults > 0){
              while($row = mysqli_fetch_assoc($result)){
               echo "<div id='content'> <section id='product'>
               	<img src = ".$row['link']." class='size'>
                <h3>".$row['name']."&nbsp;".$row['p_type']."</h3>";
               	if($row['quantity'] ==0){
                  echo"<p style='margin-top: 2px; margin-bottom: 2px;'> Out of Stock </p>";
                  echo"<p style='margin-top: 2px; margin-bottom: 2px;'>Price $ ".$row['price']."</p>
                <button href='cart.php? p_id=".$row['id']." target='_blank'> Add to cart </button>
                <button href='buy.php? p_id=".$row['id']."' target='_blank'> Buy </button>
                <section> </div>";
                }
                else if($row['quantity'] > 0){
                  echo"<p style='margin-top: 2px; margin-bottom: 2px;' >Price $ ".$row['price']."</p>
                <p><a href='cart/acart.php? tag=".$row['tag']."' target='_blank' style='text-decoration: none; margin-top:15px; margin-left: 0px;padding-left:15px;padding-right: 15px;padding-top:5px; padding-bottom: 5px; outline:none;border:none; border-radius: 35%; border-bottom: 3px solid red; background-color: #ffc453;'> Add to cart </a>
                <a  href='".$row['bnl']."' target='_blank' style='text-decoration: none; margin-top:15px; margin-left: 15px; padding-left:15px; padding-right: 15px;padding-top:5px; padding-bottom: 5px; outline:none;border:none; border-radius: 35%; border-bottom: 3px solid red; background-color: #ffc453;'> Buy </a></p>
                <section> </div>";
                }

          }

        }

		?>

</body>
</html>