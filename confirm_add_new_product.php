<?php
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	
	$prodname = mysqli_real_escape_string($link, $_REQUEST["name"]);
	$unitprice = mysqli_real_escape_string($link, $_REQUEST["unit_price"]);
	$currentstock = mysqli_real_escape_string($link, $_REQUEST["current_stock"]);
	$minstock = mysqli_real_escape_string($link, $_REQUEST["min_stock"]);
	
	
	//insert into product table
	$sql1 = "INSERT INTO product (Product_name, Unit_price) VALUES ('$prodname', '$unitprice')";
	$result = mysqli_query($link, $sql1);
	
	
	//get the product id that was just inserted
	$prodid;
	
	$sql2 = " SELECT LAST_INSERT_ID() FROM product";
	
	if($result2 = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result2) > 0){
			 while($row = mysqli_fetch_array($result2)){
				 
				 $prodid = $row[0];
			 }
		 }
	}
	
	
	// insert data in inventory table
	$sql3 = "INSERT INTO inventory (Product_id, current_stock, minimum_stock) VALUES ('$prodid', '$currentstock', '$minstock')";
	if($result3 = mysqli_query($link, $sql3)){
		echo "Product added";
		echo "<br>";
		echo "<br>";
		echo "<a href='inventory_dashboard.html'>Go to inventory Dashboard</a>";
		echo "<br>";
	}
	
	
?>