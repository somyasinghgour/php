<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1 class="text-center text-white bg-primary">DISPLAY</h1>
		
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>NAME</th>
				<th>image</th>
				
				
			</tr>
			<?php

			include "dbcon.php";

			$display = "select * from image order by id desc";
			$result = mysqli_query($con,$display);

			while($data = mysqli_fetch_array($result)){


			?>

			<tr>
				<td><?php echo $data['id'] ?></td>
				<td><?php echo $data['name'] ?></td>
				<td><img src="<?php echo $data['image'] ?>" style="width: 100px; height: 100px;border-radius: 70px;"></td>
		
				<td><a class="btn btn-warning" href="form_view.php?a=<?php echo $data['id'] ?>" >View</a></td>

				<td><a class="btn btn-primary" href="form_edit.php?a=<?php echo $data['id'] ?>" >Edit</a></td>
				<td><a class="btn btn-danger" href="form_delete.php?a=<?php echo $data['id'] ?>" >Delete</a></td>
			</tr>

            <?php


            }

        	?>



		</table>
	</div>

</body>
</html>