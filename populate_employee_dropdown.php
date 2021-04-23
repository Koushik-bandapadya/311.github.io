<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
echo "<head>
    <title>UPDATE Employee</title>
    </head>";
session_start();
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["employees"]);
	
	$empname;
	$empcontact;
	$empsal;
	$emphiredate;
	
	
	$sql1 = "SELECT Emp_Name, Contact_no,Salary,Hire_date FROM employee WHERE Emp_ID=$selected_option"; //sql
	

		if($result = mysqli_query($link, $sql1)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				$empname = $row[0];
				$empcontact = $row[1];	
				$empsal = $row[2];		
				$emphiredate = $row[3];						
				
			 }
		 }
	}
		$_SESSION['empid']=$selected_option;
		echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>UPDATE Employee Data</h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";
		echo "<form action = 'confirm_update_employee.php' method= 'post'>";
	echo "<p>";
	echo"<div align='center'>";
		echo "<label for= 'empname' class='btn btn-dark'>Employee Name:</label>";
		echo "<input type= 'text' name= 'emp_name' id=empname value = '$empname' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'contact' class='btn btn-dark'>Contact Number:</label>";
		echo "<input type= 'text' name= 'contact_no' id=contact value = '$empcontact' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'sal' class='btn btn-dark'>Salary:</label>";
		echo "<input type= 'text' name= 'salary' id=sal value = $empsal required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'hiredate' class='btn btn-dark'>Date of Hire:</label>";
		echo "<input type= 'text' name= 'hire_date' id=hiredate value = '$emphiredate' required>"; //change korsi
	echo "</p>";
	
	echo "<input type='submit' class='btn btn-warning' value='UPDATE'>";
	
	echo "</form>";
    echo "</div>";
?>