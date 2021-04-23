<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";

	echo "<head>
    <title>Genarate Bill</title>
    </head>";
	

//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$salesid = mysqli_real_escape_string($link, $_REQUEST["products"]);
	
	
	
	//bill show part
	echo"<div class='text-center'>";
		echo "<br>";
	echo "Sale ID: ";
	echo $salesid;
	echo "<br>";
	
	
	$sql4 = "SELECT Sale_date, customer_name, phone FROM customer,sale WHERE customer.customer_id = sale.Customer_id AND sale.Sale_id= $salesid"; //sql
	
		if($result4 = mysqli_query($link, $sql4)){
		 if(mysqli_num_rows($result4) > 0){
			 while($row4 = mysqli_fetch_array($result4)){
				 echo "Date: ";
				 echo $row4[0];
				 echo "<br>";
				 echo "Customer Name: ";
				 echo $row4[1];
				 echo "<br>";
				 echo "Customer phone: ";
				 echo $row4[2];
				 echo "<br>";
			 }
		 }
		}
	$sql5 = "SELECT Emp_Name FROM employee,sale WHERE employee.Emp_ID = sale.Sold_by AND sale.Sale_id= $salesid"; //sql
	
		if($result5 = mysqli_query($link, $sql5)){
		 if(mysqli_num_rows($result5) > 0){
			 while($row5 = mysqli_fetch_array($result5)){
				 echo "Sold by: ";
				 echo $row5[0];
				 echo "<br>";
				 
			 }
		 }
		}
	
	//table generate
	 echo "<br>";
	  echo "<br>";
	  
	  $sum =0;
	  
	$sql6 = "SELECT Product_name,quantity,Unit_price,(quantity*Unit_price) AS amount FROM sale_details AS s,product AS p WHERE s.product_id=p.Product_id AND sale_id = $salesid"; 
	if($result6 = mysqli_query($link, $sql6)){
		if(mysqli_num_rows($result6) > 0){   
	//echo "<table style = 'border: 1px solid black' align='center' >";
	echo "<table style = 'border: 1px solid black' align='center' cellpadding='25''>";
	echo "<tr>"; 
	echo "<th style = 'border: 1px solid black;'>Product Name</th>"; 
	echo "<th style = 'border: 1px solid black;'>Quantity</th>";      
	echo "<th style = 'border: 1px solid black;'>Unit Price</th>";            
	echo "<th style = 'border: 1px solid black;'>Total</th>";        
	echo "</tr>";   
	while($row6 = mysqli_fetch_array($result6)){    
	echo "<tr>";   
	echo "<td style = 'border: 1px solid black;'>" . $row6[0] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row6[1] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row6[2] . "</td>";     
	echo "<td style = 'border: 1px solid black;'>" . $row6[3] . "</td>";   
	echo "</tr>";   
		$sum = $sum+$row6[3];
	}       
	echo "</table>"; 
		}
	}
	
	 echo "<br>";
	 echo "Grand Total: ";
	 echo $sum;
	 echo "<br>";
	 echo "<br>";
	 echo "<br>";
	 
	echo "<a href='manager_dashboard.php' class='btn btn-warning'>Go to Dashboard</a>";
	 
?>