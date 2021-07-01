<?php

include "dbcon.php";

$id = $_GET['a'];

$display = "select * from image where id =$id";
$result = mysqli_query($con,$display);

$data = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="imageupdate.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		name:<br>
		<input type="text" name="name" value="<?php echo $data['name'] ?>"><br>
		image:<br>
		<input type="file" name="image" value="<?php echo $data['image'] ?>"><br>
        <img src="<?php echo $data['image'] ?>" style="width: 100px; height: 100px;border-radius: 70px;">
		<input type="submit" name="" value="submit">

	</form>

</body>
</html>