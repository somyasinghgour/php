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
				<th>address</th>
				<th>latitude</th>
				<th>longitude</th>
				<th>zipcode</th>
				<th>floor</th>
				<th>city</th>
				<th>saleprice</th>
				<th>areasize</th>
				<th>bedroom</th>
				<th>reception</th>
				<th>pricepostfix</th>
				<th>sizepostfix</th>
				<th>bathroom</th>
				<th>garage</th>
				<th>features</th>
				
			</tr>


			<?php

			include "dbcon.php";
			$id = $_GET['a'];
            $display = "select * from property where id = $id";

            $result = mysqli_query($con,$display);
            $data = mysqli_fetch_array($result);
			?>

			<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['address'] ?></td>
			<td><?php echo $data['latitude'] ?></td>
			<td><?php echo $data['longitude'] ?></td>
			<td><?php echo $data['zipcode'] ?></td>
			<td><?php echo $data['floor'] ?></td>
			<td><?php echo $data['city'] ?></td>
			<td><?php echo $data['saleprice'] ?></td>
			<td><?php echo $data['areasize'] ?></td>
			<td><?php echo $data['bedroom'] ?></td>
			<td><?php echo $data['reception'] ?></td>
			<td><?php echo $data['pricepostfix'] ?></td>
			<td><?php echo $data['sizepostfix'] ?></td>
			<td><?php echo $data['bathroom'] ?></td>
			<td><?php echo $data['garage'] ?></td>
			<td><?php echo $data['features'] ?></td>
			
			
		    </tr>

		</table>
	</div>

	

</body>
</html>