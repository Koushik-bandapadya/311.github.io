<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
echo "<head>
    <title>UPDATE Done</title>
    </head>";
session_start();
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$empname = mysqli_real_escape_string($link, $_REQUEST["emp_name"]);
	$contactno = mysqli_real_escape_string($link, $_REQUEST["contact_no"]);
	$sal = mysqli_real_escape_string($link, $_REQUEST["salary"]);
	$hiredate = mysqli_real_escape_string($link, $_REQUEST["hire_date"]);
	
	$emp_id;
	if (!empty($_SESSION['empid'])) {
    $emp_id = $_SESSION['empid'];
	}
	
	$sql1 = "UPDATE employee SET Emp_Name='$empname', Contact_no = '$contactno', Salary = $sal, Hire_date = '$hiredate' WHERE Emp_ID='$emp_id'";
			if($result = mysqli_query($link, $sql1)){
				echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>UPDATE Done</h3>
             
	 	</div>
	</article>
</section>
";
				echo"<div align='center'>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<a href='employee_management_dashboard.html' class='btn btn-warning'>Go to Employee management Dashboard</a>";
				echo "</div>";
			}
			
	
?>