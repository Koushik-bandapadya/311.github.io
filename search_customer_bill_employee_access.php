<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
	echo "<head>
    <title>Search Customer</title>
    </head>";
	
	echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>Customer Found</h3>
             
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

	
	$customerName = mysqli_real_escape_string($link, $_REQUEST["name"]);
	$customerPhone = mysqli_real_escape_string($link, $_REQUEST["phone"]);
	
	
	$custID;
	
	
	// find the customer id that matches the name and phone
	$sql = "SELECT customer_id FROM customer WHERE customer_name = '$customerName' AND phone = '$customerPhone'"; //sql
				 if($result = mysqli_query($link, $sql)){
					 
					if(mysqli_num_rows($result) > 0){
						
						while($row = mysqli_fetch_array($result)){
							$custID = $row[0];
								}
							}
							else if(mysqli_num_rows($result) == 0){
								header("location:no_record_found_customer_search_bill.php");
							}
							
				 }
				 
				 
				 //echo $custID;
				 echo "<br>";
	
	// now we have the customer id, we will show the sale id(s) and date(s) from the sale table for the mentioned customer idate
	
	$sql2 = "SELECT Sale_id, Sale_date FROM sale WHERE Customer_id = '$custID'"; //sql
				 if($result2 = mysqli_query($link, $sql2)){
					 
					if(mysqli_num_rows($result2) > 0){
						
						echo "<form action = 'generate_bill_for_customer_employee_access.php' method= 'post'>";
						echo"<div class='text-center'>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<label for='products' class='btn btn-primary'>‏‏‎‏‏‎ ‎Choose a Sale ID To Generate Bill :‏‏‎ ‎</label>";

						echo "<select name='products' class='btn btn-dark' method= 'post'>";
								
						while($row2 = mysqli_fetch_array($result2)){
						echo "<option value='$row2[0]'>$row2[0]-------$row2[1]</option>";
						}
						echo "</select>";
						echo "<br>";
						echo "<br>";
						echo "<input type='submit' class='btn btn-warning' value='‏‏‎Submit'>";
						echo "</form>";
						echo "</div>";
								
								}
							}
							
		 
?>