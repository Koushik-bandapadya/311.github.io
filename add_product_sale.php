
<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
	echo "<head>
    <title>Sale</title>
    </head>";
    echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>Add Product</h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";
    //attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	$sql1 = "SELECT Product_name FROM product";
	$result = mysqli_query($link, $sql1);
	$row;
?>	


	<?php
		if(mysqli_num_rows($result) > 0){
		echo"<div class='text-center'>";
		echo "<br>";
		echo "<form action = 'populate_dropdown.php' method= 'post'>";
		echo "<label for='cars' class='btn btn-dark'>Choose a product:</label>";

			echo "<select name='cars' class='btn btn-primary' method= 'post'>";
			
			
			while($row = mysqli_fetch_array($result)){
			echo "<option value='$row[0]'>$row[0]</option>";
			}
			
			echo "</select>";
			echo"<p>";
			echo"<label for= 'userName' class='btn btn-dark'>Quantity:</label>";
			echo "<input type= 'text'  name= 'quantity' id=userName>";
			echo"</p>";			
			echo "<input type='submit' class='btn btn-warning' value='submit'>";
			echo "</form>";
			echo "</div>";
		}
		
		
		
	?>

