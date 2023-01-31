<h1>Thanks for shopping with us.</h1>
<fieldset style="width: 500px; height: 400px">
	<legend>Shipping Details</legend>
<pre>	
	<?php
		echo "Name:- ".$_POST['name'];
	?>
</pre>
<pre>	
	<?php
		echo "Email:- ".$_POST['email'];
	?>
</pre>
<pre>	
	<?php
		echo "Gender:- ".$_POST['gender'];
	?>
</pre>
<pre>	
	<?php
		echo "Phone:- ".$_POST['phone'];
	?>
</pre>
<pre>	
	<?php
		echo "Mode:- ".$_POST['mode'];
	?>
</pre>
<pre>	
	<?php
		echo "Address:- ".$_POST['address1'].", ".$_POST['address2'];
	?>
</pre>
<pre>	
	<?php
		echo "<a href='http://localhost/project/proj.php'> Click Here</a> for contuning shopping.";
	?>
</pre>

</fieldset>