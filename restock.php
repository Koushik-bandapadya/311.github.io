<?php

echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
	
	echo "<head>
    <title>Restock Message</title>
    </head>";
	
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-5 text-white'>These products need restock because they have less than minimum stock</h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";


	
	
	$sql = "SELECT Product_name, Unit_price, current_stock, minimum_stock FROM product,inventory WHERE product.Product_id = inventory.Product_id AND current_stock<minimum_stock";
	
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){  
			
	echo "<table style = 'border: 2px solid black' align='center' cellpadding='25'>";
	echo "<tr>"; 
	echo "<th style = 'border: 1px solid black;'>Product Name</th>"; 
	echo "<th style = 'border: 1px solid black;'>Unit Price</th>";      
	echo "<th style = 'border: 1px solid black;'>Current Stock</th>";            
	echo "<th style = 'border: 1px solid black;'>Minimum Stock</th>";        
	echo "</tr>";   
	while($row = mysqli_fetch_array($result)){    
	echo "<tr>";   
	echo "<td style = 'border: 1px solid black;'>" . $row[0] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row[1] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row[2] . "</td>";     
	echo "<td style = 'border: 1px solid black;'>" . $row[3] . "</td>";   
	echo "</tr>";   
		
	}       
	echo "</table>"; 
		}
	}
	echo"<div class='text-center'>";
	echo "<br>";
	echo "<br>";
	echo "<a href='inventory_dashboard.html' class='btn btn-primary'>‏‏‎ ‎‏‏‎Go to Inventory Dashboard‏‏‎‏‏‎ ‎</a>";
	echo "</div>";
	
	
?>