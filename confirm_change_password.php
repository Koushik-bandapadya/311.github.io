<?php
echo "<meta charset = 'UTF-8'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
	 echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
	 echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
	echo "<head>
    <title>Confirm Change Password</title>
    </head>";
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["employees"]);
	
	$sql1 = "UPDATE login SET password = '1234' WHERE employee_id = $selected_option";
	
	if($result = mysqli_query($link, $sql1)){
		echo "<section class='bg-primary'>
	<article class='py-5 text-center text-white'>
	 	<div>
	 		<h3 class='display-4 text-white'>$selected_option password has been changed to default</h3>
             
	 	</div>
	</article>
</section>
";
echo "<br>";
		
		echo"<div align='center'>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<a href='manager_dashboard.php' class='btn btn-warning'>Go to dashboard</a>";
		echo "</div>";
	}
?>