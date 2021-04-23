<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";

	echo "<head>
    <title>Add Employee</title>
    </head>";
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($link, $_REQUEST["emp_name"]);
	$phone = mysqli_real_escape_string($link, $_REQUEST["contact_no"]);
	$salary = mysqli_real_escape_string($link, $_REQUEST["slr"]);
	$hiredate = mysqli_real_escape_string($link, $_REQUEST["date"]);
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["authorization"]);
	
	$sql1 = "INSERT INTO employee (Emp_name,Contact_no,Salary,Hire_date) VALUES ('$name', '$phone', $salary, '$hiredate')";
	$result = mysqli_query($link, $sql1);
	
	$empid;
	
	$sql2 = " SELECT LAST_INSERT_ID() FROM product";
	
	if($result2 = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result2) > 0){
			 while($row = mysqli_fetch_array($result2)){
				 
				 $empid = $row[0];
			 }
		 }
	}
	
	
	
	$sql3 = "INSERT INTO login (employee_id, password) VALUES ($empid, '1234')";
	if($result3 = mysqli_query($link, $sql3)){
		
	}
	$sql4 = "INSERT INTO manager_authorization (employee_id, authorization) VALUES ($empid, '$selected_option')";
	if($result4 = mysqli_query($link, $sql4)){
		echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>Employee added</h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";
		echo"<div class='text-center'>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<a href='employee_management_dashboard.html' class='btn btn-primary'>Go to Employee Management Dashboard</a>";
		echo "<br>";
		echo "</div>";
	}
	
	
	
	
?>