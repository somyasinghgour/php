<?php

include "dbcon.php";

$id = $_GET['a'];

$display = "select * from employee where id =$id";
$result = mysqli_query($con,$display);

$data = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="employee_update.php">
		<input type="text" name="id" value="<?php echo $data['id'] ?>">
		Name:
		<input type="text" name="name" value="<?php echo $data['name'] ?>">
		<br>
		Email:
		<input type="text" name="email" value="<?php echo $data['email'] ?>">
		<br>
		phone:
		<input type="text" name="phone" value="<?php echo $data['phone'] ?>">
		<br>
		password:
		<input type="password" name="password" value="<?php echo $data['password'] ?>">
		<br>
		<button type="submit">update</button>
	</form>

</body>
</html>