<?php
	
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
	
 
	echo "<head>
    <title>Add Product</title>
    </head>";
	
echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>Add a new product in inventory</h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";

	echo "<form action = 'confirm_add_new_product.php' method= 'post'>";
	echo "<p>";
	echo"<div class='text-center'>";
		echo "<label for= 'prodname' class='btn btn-dark'> ‎Product Name: </label>";
		echo "<br> <input type= 'text' name= 'name' id=prodname required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'price' class='btn btn-dark'> ‎Unit Price: ‎</label>";
		echo "<br><input type= 'text' name= 'unit_price' id=price required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'currentstock' class='btn btn-dark'> ‎Current Stock: ‎</label>";
		echo "<br> <input type= 'text' name= 'current_stock' id=currentstock required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'minstock' class='btn btn-dark'> ‎Minimum Stock: ‎</label>";
		echo "<br> <input type= 'text' name= 'min_stock' id=minstock required>";
	echo "</p>";
	
	echo "<input type='submit' class='btn btn-warning' value=' ‎Add'>";
	
	echo "</form>";
echo "</div>";

?>