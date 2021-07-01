<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<!-- <?php 

// include "dbcon.php";

// $id = $_GET['a'];
// $display = "select * from form where id = $id";

// $result = mysqli_query($con,$display);
// $data = mysqli_fetch_array($result);

// echo"<pre>";
// print_r($data);



 ?> -->

	<div class="container">
		<h1 class="text-center bg-warning">data view</h1>
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>phone</th>
				<th>address</th>
				<th>gender</th>
				<th>college</th>
				<th>qualification</th>
				<th>branch</th>
				<th>semester</th>
				<th>course</th>
			</tr>

			<?php

			include "dbcon.php";
			$id = $_GET['a'];
            $display = "select * from form where id = $id";

            $result = mysqli_query($con,$display);
            $data = mysqli_fetch_array($result);
			?>

			<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['phone'] ?></td>
			<td><?php echo $data['address'] ?></td>
			<td><?php echo $data['gender'] ?></td>
			<td><?php echo $data['college'] ?></td>
			<td><?php echo $data['qualification'] ?></td>
			<td><?php echo $data['branch'] ?></td>
			<td><?php echo $data['semester'] ?></td>
			<td><?php echo $data['course'] ?></td>
		    </tr>

		</table>
	</div>

	

</body>
</html>

 