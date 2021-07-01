<?php

include "dbcon.php";

$name = $_POST['x'];
$email = $_POST['y'];
$city = $_POST['z'];



$data = "insert into user(Name,email,city)value('$name','$email',$city)";
mysqli_query($con,$data);




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method = "post" action = "task_insert.php">
		Name:
		<input type = "text" name = "x">
		<br>
		Email:
		<input type = "text" name = "y">
		<br>
		City:
		<input type = "text" name = "z">
		<br>
		<input type = "submit" name = "" value = "submit">
		<br>
	</form>

</body>
</html>