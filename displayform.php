<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		
		<h1 class="text-center bg-info">Form Display</h1>

		<table class="table-bordered table">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>phone</th>
				<th>action</th>
			</tr>

			<?php

			include "dbcon.php";
			$display = "select * from form";
			$result = mysqli_query($con,$display);

			while($data = mysqli_fetch_array($result)){
				// echo "<pre>";
				// print_r($data);

			

			?>

			<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['phone'] ?></td>
			<td>
				<a href="internship_view.php?a=<?php echo $data['id'] ?>" class="btn btn-info">View</a>
				<a href="intern_edit.php?a=<?php echo $data['id'] ?>" class="btn btn-info">Edit</a>
				<a href="intern_delete.php?a=<?php echo $data['id'] ?>" class="btn btn-info">Delete</a>
				
			</td>
			
		    </tr>

		    <?php
 
 		    }

		    ?>
		</table>
		
	</div>


</body>
</html>