
<?php

//checking if already logged out
session_start();
$user_info = $_SESSION['Username'];

if ($user_info == null) header('Location: login2.html');
?>

<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="allcss.css">
	<title>Dashboard</title>
</head>

<body>
	<section class="bg-primary">
	<article class="py-5 text-center text-white">
	 	<div>
	 		<h3 class="display-4 text-white">Hello Employee, Welcome to your dashboard</h3>
             
	 	</div>
	</article>
</section>
	
	
	
	
	<div class="text-center">
	<br>
	<a href="sale_information.html" class="btn btn-primary">Make a sale</a><br>
	<br>
	<a href="show_all_product_employee_access.php" class="btn btn-primary"> ‎Show all products</a><br>
	<br>
    <a href="restock_employee_access.php" class="btn btn-primary"> ‎Show restock messege</a><br>
	<br>

	<a href="search_bill_name_number_input_employee_access.html" class="btn btn-primary"> ‎Search Customer Bill</a>
	<br>
	<br>
	<a href="logout.php" class="btn btn-danger">Logout</a>
	</div>

</body>