<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
	echo "<head>
    <title>Search by product</title>
    </head>";

//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["products"]);
	$prodid=0;
	
	echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-5 text-white'>The customer list for $selected_option: </h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";
	
	
	$sql2 = "SELECT Product_id FROM product WHERE Product_name = '$selected_option'";
	if($result2 = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result2) > 0){
			 while($row2 = mysqli_fetch_array($result2)){
				 $prodid = $row2[0];
				 
			 }
		 }
	}
	
	 
	$sql1 = "SELECT DISTINCT customer_name,phone FROM customer as c,sale_details as d ,sale as s WHERE d.sale_id= s.Sale_id AND s.Customer_id = c.customer_id AND d.product_id = $prodid"; //sql

		if($result = mysqli_query($link, $sql1)){
		if(mysqli_num_rows($result) > 0){   
	echo "<table style = 'border: 1px solid black;' align='center' cellpadding='30' >";
	echo "<tr>"; 
	echo "<th style = 'border: 1px solid black;'>Customer Name</th>"; 
	echo "<th style = 'border: 1px solid black;'>Phone</th>";      
	       
	echo "</tr>";   
	while($row = mysqli_fetch_array($result)){    
	echo "<tr>";   
	echo "<td style = 'border: 1px solid black;'>" . $row[0] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row[1] . "</td>";       
	
	echo "</tr>";   
		
	}       
	echo "</table>"; 
		}
	}
	echo"<div class='text-center'>";
	echo "<br>";
	echo "<br>";
	echo "<a href='crm_dashboard.html' class='btn btn-primary'>Go to CRM Dashboard</a>";
	echo "</div>";
	?>