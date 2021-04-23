<?php
	echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
	
	echo "<head>
    <title>Add Employee</title>
    </head>";
    echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>Add A New Employee</h3>
             
	 	</div>
	</article>
</section>
";

echo "<br>";
	echo "<form action = 'confirm_add_new_employee.php' method= 'post'>";
	echo "<p>";
	echo"<div align='center'>";
		echo "<label for= 'empname' class='btn btn-dark'>Employee Name:</label>";
		echo "<input type= 'text' name= 'emp_name' id=empname required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'contact' class='btn btn-dark'>Phone Number:</label>";
		echo "<input type= 'text' name= 'contact_no' id=contact required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'salary' class='btn btn-dark'>Salary:</label>";
		echo "<input type= 'text' name= 'slr' id=salary required>";
	echo "</p>";
	 
	echo "<label for='authorization' class='btn btn-dark'>Is a manager?:</label>";
	echo "<select name='authorization' method= 'post'>";
	echo "<option value='yes'>Yes</option>";
	echo "<option value='no'>No</option>";
	echo "</select>";
	echo "<br>";
	echo "<br>";
	echo "<p>";
		echo "<label for= 'dates' class='btn btn-dark'>Hire Date:</label>";
		echo "<input type='date' id='dates' name='date' required>";
	echo "</p>";
	
	echo "<input type='submit' class='btn btn-warning' value='Add'>";
	
	echo "</form>";

echo "</div>";
?>