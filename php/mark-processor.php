<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spe";

$link = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()){
	die("Could not connect to db");
}
else{
 	$id = $_GET["id"];
	$semester = $_GET["semester"];
	$year = $_GET["year"];
	$school = $_GET["school"];
	$dept = $_GET["dept"];
	$major = $_GET["major"];
	$university = "iub";

	 $query = "INSERT INTO `student` (`id`, `semester`, `year`, `school`, `dept`, `major`,`university`) VALUES ('$id','$semester', '$year', '$school', '$dept', '$major','$university')";  
	 mysqli_query($link,$query);
	 // echo 'data submitted';

	 // header("refresh:0.0000000000000000000000000000000000000000000000000001;url=http://localhost/dars/iub_admin.php?");

	 // mysqli_close($link);
}
