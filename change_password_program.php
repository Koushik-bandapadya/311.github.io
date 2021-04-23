<?php
echo "<meta charset = 'UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap' rel='stylesheet'>";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo"<link rel='stylesheet' href='allcss.css'>";
echo "<head>
   <title>Change Password</title>
   </head>";
session_start();

//attempt mysql server conncetion with default setting
$link = mysqli_connect("localhost", "root", "", "emp_demo_02");

//check connection
if($link === false){
die("ERROR: Could not connect".mysqli_connect_error());
}


if (!empty($_SESSION['Username'])) {
   $userid = $_SESSION['Username'];
}

$pass1 = mysqli_real_escape_string($link, $_REQUEST["password1"]);
$pass2 = mysqli_real_escape_string($link, $_REQUEST["password2"]);

if(($pass1!=$pass2)){
echo "Please try again";
header("location: change_pass_wrong.html");
}
if($pass1==""){
echo "Please try again";
header("location: change_pass_wrong.html");
}

elseif($pass1==$pass2){

$sql = "UPDATE login SET password='$pass1' WHERE employee_id=$userid";

if($result2 = mysqli_query($link, $sql)){
echo "<section class='bg-primary'>
<article class='py-5 text-center text-white'>
<div>
<h3 class='display-5 text-white'>Password Changed</h3>
           
</div>
</article>
</section>
";
echo "<br>";

echo"<div class='text-center'>";
echo "<br>";
echo"<br>";
echo "<a href='login2.html' class='btn btn-warning'>Go to homepage</a>";
echo "</div>";
}
else{

echo "<section class='bg-primary'>
<article class='py-5 text-center text-white'>
<div>
<h3 class='display-5 text-white'>Password could not be updated</h3>
           
</div>
</article>
</section>
";
echo"<div class='text-center'>";
echo "<br>";
echo"<br>";
echo "<a href='login2.html' class='btn btn-warning'>Go to homepage</a>";
echo "</div>";
}

}



?>