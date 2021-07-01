<?php

include "dbcon.php";

$id = $_GET['a'];

$display = "select * from student where id =$id";
$result = mysqli_query($con,$display);

$data = mysqli_fetch_array($result);


?>
<form method="post" action="get_update.php">
	<input type="text" name="id" value="<?php echo $data['id'] ?>">
		username:
		<input type="text" name="x" value="<?php echo $data['username'] ?>">
		<br>
		password:
		<input type="password" name="y" value="<?php echo $data['password'] ?>">
		<br>
		<button type="submit">update</button>
	</form>