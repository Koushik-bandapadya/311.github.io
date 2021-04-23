<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
echo "<head>
    <title>Product Updated</title>
    </head>";
session_start();
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($link, $_REQUEST["name"]);
	$uniprice = mysqli_real_escape_string($link, $_REQUEST["unit_price"]);
	$currstock = mysqli_real_escape_string($link, $_REQUEST["current_stock"]);
	$minstock = mysqli_real_escape_string($link, $_REQUEST["min_stock"]);
	
	$prodid;
	if (!empty($_SESSION['productid'])) {
    $prodid = $_SESSION['productid'];
	}
	
	$sql1 = "UPDATE product SET Product_name='$name', Unit_price = '$uniprice' WHERE Product_id=$prodid";
			if($result = mysqli_query($link, $sql1)){
				
				//echo "done";
			}
			$sql2 = "UPDATE inventory SET current_stock='$currstock', minimum_stock = '$minstock' WHERE Product_id=$prodid";
			if($result = mysqli_query($link, $sql2)){
				echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>Product Successfully Updated</h3>
             
	 	</div>
	</article>
</section>
";
			echo "<br>";
			echo "<br>";
	echo"<div class='text-center'>";
				echo "<br>";
				echo "<br>";
				echo "<a href='inventory_dashboard.html' class='btn btn-warning'>Go to inventory Dashboard</a>";
				echo"<div>";
			}
	
?>