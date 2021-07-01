<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1 class="text-center bg-warning">data view</h1>
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>username</th>
				<th>password</th>
				<th>email</th>
				<th>phone</th>
				<th>city</th>
				<th>address</th>
				<th>pincode</th>
			</tr>


			<?php

			include "dbcon.php";
			$id = $_GET['a'];
            $display = "select * from demo where id = $id";

            $result = mysqli_query($con,$display);
            $data = mysqli_fetch_array($result);
			?>

			<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo $data['password'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['phone'] ?></td>
			<td><?php echo $data['city'] ?></td>
			<td><?php echo $data['address'] ?></td>
			<td><?php echo $data['pincode'] ?></td>
			
		    </tr>

		</table>
	</div>

	

</body>
</html>

