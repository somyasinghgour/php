<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1 class="text-center bg-info">data display</h1>

	<table class="table table-bordered">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			
		</tr>

		<?php

		include "dbcon.php";
		$display = "select * from student";
		$result = mysqli_query($con,$display);
		

		while($data = mysqli_fetch_array($result)){
			// echo "<pre>";
   //          print_r($data);


		

		// echo "<pre>";
  //       print_r($data);



		?>

		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo $data['password'] ?></td>
			<td>
				<a href="get_edit.php?a=<?php echo $data['id'] ?>" class="btn btn-info">edit</a>
			</td>
		</tr>
		<?php

	     }
		?>
	</table>
</div>

</body>
</html>