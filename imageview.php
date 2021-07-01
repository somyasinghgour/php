<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1 class="text-center text-white bg-dark">VIEW</h1>
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>image</th>
				
			</tr>


			<?php

			include "dbcon.php";
			$id = $_GET['a'];
            $display = "select * from image where id = $id";

            $result = mysqli_query($con,$display);
            $data = mysqli_fetch_array($result);
			?>

			<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name'] ?></td>
			<td><img style="width: 100px; height: 100px; border-radius: 50px;" src="<?php echo $data['image'] ?>" ></td>
			
		    </tr>

		</table>
	</div>

	

</body>
</html>
