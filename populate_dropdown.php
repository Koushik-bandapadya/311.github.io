<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
	
session_start();
	
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["cars"]);
	$amount = mysqli_real_escape_string($link, $_REQUEST["quantity"]);
	
	

	$salesid;
	if (!empty($_SESSION['saleID'])) {
    $salesid = $_SESSION['saleID'];
	}
	

	
		$productid;
	
	$sql1 = "SELECT Product_id FROM product WHERE Product_name='$selected_option'"; //sql

		if($result = mysqli_query($link, $sql1)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 $productid = $row[0];
					 
				 }
			 }
		 }
		 
		// to inventory table
		$stock;
		
		$sql2 = "SELECT current_stock FROM inventory WHERE Product_id='$productid'"; //sql

		if($result = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 $stock = $row[0];
					 
				 }
			 }
		 }
	
		
		//check if the item that was selected is already in sale details table
		$sqltest = "SELECT product_id FROM sale_details WHERE sale_id = '$salesid' AND product_id = '$productid'";
		if($resulttest = mysqli_query($link, $sqltest)){
			if(mysqli_num_rows($resulttest)> 0){
				
				
				// if amount 0 as then the item will be deleted from the sale_details table
				if($amount == 0){

					$sqltest3 = "DELETE FROM sale_details WHERE sale_id = '$salesid' AND product_id = '$productid'";
					mysqli_query($link, $sqltest3);
					
				echo"<div class='text-center'>";
				echo "<br>";
				echo "<br>";
				echo "<a href='add_product_sale.php' class='btn btn-primary'>Add more item</a>";
				echo "<br>";
				echo "<br>";
		
				echo "<a href='generate_bill.php' class='btn btn-primary'>Generate bill</a>";
				echo "<br>";
				echo "</div>";	
				}
				
				//normal update of the amount
				else if($amount > 0){
				$sqltest2 = "UPDATE sale_details SET quantity='$amount' WHERE sale_id = '$salesid' AND product_id = '$productid'";
				mysqli_query($link, $sqltest2);
				
				
				echo"<div class='text-center'>";
				echo "<br>";
				echo "<br>";
				echo "<a href='add_product_sale.php' class='btn btn-primary'>Add more item</a>";
				echo "<br>";
				echo "<br>";
				
				echo "<a href='generate_bill.php' class='btn btn-primary'>Generate bill</a>";
				echo "<br>";
				echo "</div>";	
				}
			}
			
			else{
		
		//check whether quantity is greater than available stock or negative input 
		if(($amount>$stock) ||($amount<0)){
			
			echo"<div class='text-center'>";
			echo "<br>";
			echo "<br>";

			echo "<a href='add_product_sale.php' class='btn btn-danger'>Amount is 0 or more than stock. Please try again</a>";
			echo "</div>";	
		}
		//normal case
		else{
			//add the product id and quantity in sales details table
			$sql3 = "INSERT INTO sale_details (sale_id,product_id,quantity) VALUES ('$salesid','$productid', '$amount')";
			if(mysqli_query($link, $sql3)){
				
				
				echo"<div class='text-center'>";
				echo "<br>";
				echo "<br>";
				echo "<a href='add_product_sale.php' class='btn btn-primary'>Add more item</a>";
				echo "<br>";
				echo "<br>";
				
				echo "<a href='generate_bill.php' class='btn btn-primary'>Generate bill</a>";
				echo "<br>";
				echo "</div>";	
				
			}
		}
		
			}
		
		}
		
			
		
		
		
		
	
	?>