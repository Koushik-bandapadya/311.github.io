
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


	<title>Dashboard Manager</title>

</head>
<body>
<section class="bg-primary">
	<article class="py-5 text-center text-white">
	 	<div>
	 		<h3 class="display-4 text-white">Hello Manager, Welcome to your dashboard</h3>
             
	 	</div>
	</article>
</section>


	 
	
	<br>
	<div class="text-center">
	<a href="inventory_dashboard.html"  class="btn btn-primary">‏‏‎‏‏‎ ‎Inventory Management</a>
	<br>
	<br>
	<a href="sale_information.html" class="btn btn-primary">‏‏‎‏‏‎ ‎Make a sale</a>
	<br>
	<br>
	<a href="crm_dashboard.html" class="btn btn-primary">‏‏‎‏‏‎ ‎Customer Relation Management</a>
	<br>
	<br>
	<a href="employee_management_dashboard.html" class="btn btn-primary">‏‏‎‏‏‎ ‎Employee Management</a>
	<br>
	<br>
	<a href="logout.php" class="btn btn-danger">‏‏‎‏‏‎ ‎Logout</a>

</div>
</body> 

