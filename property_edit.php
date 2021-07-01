<?php

include "dbcon.php";

$id = $_GET['a'];

$display = "select * from property where id =$id";
$result = mysqli_query($con,$display);

$data = mysqli_fetch_array($result);

$a = $data['features'];
$x= explode(',', $a);
// $b = $data['type'];
// $y= explode(',', $a);
// $c = $data['propertycity'];
// $z= explode(',', $a);
// echo"<pre>";
// print_r($b);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	
</head>
<body>

	<div class="container-fluid bg-info">
		<div class="container bg-light">

		    
		    		<h2 class="text-center text-danger">PROPERTY</h2>
		    		<form method="post" action="property_update.php">

		    			<input type="hidden" name="id" value="<?php echo $data['id']?>">

		    			<div class="form-group">
				    		<label>Property Address</label>
				    	    <input type="text" name="address" class="form-control" placeholder="Enter Address"  value="<?php echo $data['address']?>">
				    	</div>
				    	<div class="row">
				    		<div class="col-md-4">
				    		    <div class="form-group">
				    			<label>Latitude</label>
				    	    	<input type="text" name="latitude" class="form-control" placeholder="Enter Latitude"  value="<?php echo $data['latitude']?>">
				    	        </div>
				    		</div><!--col-4 end-->

				    		<div class="col-md-4">
				    		    <div class="form-group">
				    			<label>Longitude</label>
				    	    	<input type="text" name="longitude" class="form-control" placeholder="Enter Longitude"  value="<?php echo $data['longitude']?>">
				    	        </div>
				    		</div><!--col-4 end-->

				    		<div class="col-md-4">
				    		    <div class="form-group">
				    			<label>Zip Code</label>
				    	    	<input type="text" name="zipcode" class="form-control" placeholder="Enter Zip Code"  value="<?php echo $data['zipcode']?>">
				    	        </div>
				    		</div><!--col-4 end-->
				    	</div>
				    	<div class="form-group">
				    			<label>Floor</label><br>
				    			<input type="radio" name="floor" value="Ground"
				    			<?php
              					if($data['floor']=='Ground'){
              					echo "checked";
              					}

								?>
				    			>Ground	
				    			<input type="radio" name="floor" value="First"
				    			<?php
              					if($data['floor']=='First'){
              					echo "checked";
              					}

								?>
								>First
				    			<input type="radio" name="floor" value="Second"
				    			<?php
              					if($data['floor']=='Second'){
              					echo "checked";
              					}

								?>
				    			>Second
				    			<input type="radio" name="floor" value="Third"
				    			<?php
              					if($data['floor']=='Third'){
              					echo "checked";
              					}

								?>
								>Third

				    	</div>
				    	<div class="form-group">
				    			
				    		<label>City</label>
				    		<select class="form-control" name="city"> 
				    		<option value="select"
				    		<?php
              				if($data['city']=='select'){
              				echo "selected";
             				}

							?>
				    		>Select</option>
				    		<option value="Gwalior"
				    		<?php
              				if($data['city']=='Gwalior'){
              				echo "selected";
             				}

							?>
				    		>Gwalior</option>
				    		<option value="Bhopal"
				    		<?php
              				if($data['city']=='Bhopal'){
              				echo "selected";
             				}

							?>
				    		>Bhopal</option>
				    		<option value="Jhansi"
				    		<?php
              				if($data['city']=='Jhansi'){
              				echo "selected";
             				}

							?>
				    		>Jhansi</option>				    				
				    		<option value="OTHERS"
				    		<?php
              				if($data['city']=='OTHERS'){
              				echo "selected";
             				}

							?>
				    		>OTHERS</option>
				    		</select>
				    	</div>
				    	<div class="row">
				    		<div class="col-md-6">
				    			<div class="form-group">
				    			<label>Sale or rent Price</label>
				    	    	<input type="text" name="saleprice" class="form-control" placeholder="Enter only digits"  value="<?php echo $data['saleprice']?>">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Area Size</label>
				    	    	<input type="text" name="areasize" class="form-control" placeholder="Enter only digits" value="<?php echo $data['areasize']?>">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Bedroom</label>
				    	    	<input type="text" name="bedroom" class="form-control" value="<?php echo $data['bedroom']?>">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Reception</label>
				    	    	<input type="text" name="reception" class="form-control" value="<?php echo $data['reception']?>">
				    	        </div>
				    			
				    		</div>
				    		<div class="col-md-6">
				    			<div class="form-group">
				    			<label>Price Postfix</label>
				    	    	<input type="text" name="ppostfix" class="form-control" value="<?php echo $data['pricepostfix']?>">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Size Postfix</label>
				    	    	<input type="text" name="spostfix" class="form-control" value="<?php echo $data['sizepostfix']?>">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Bathroom</label>
				    	    	<input type="text" name="bathroom" class="form-control" value="<?php echo $data['bathroom']?>">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Garage</label>
				    	    	<input type="text" name="garage" class="form-control" value="<?php echo $data['garage']?>">
				    	        </div>
				    			
				    		</div>
				    	</div><!--row end-->
                        
                        		<div class="form-group">
				    	 		<label>Features</label><br>
				    			<input type="checkbox" name="features[]" value="Air Conditioner"
				    			<?php
			                    if(in_array('Air Conditioner', $x)){
								echo "checked";
								}

								?>
				    			>Air Conditioner<br>
                        		<input type="checkbox" name="features[]" value="CCTV"
                        		<?php
			                    if(in_array('CCTV', $x)){
								echo "checked";
								}

								?>
                        		>CCTV<br>      
                        		<input type="checkbox" name="features[]" value="Balcony"
                        		<?php
			                    if(in_array('Balcony', $x)){
								echo "checked";
								}

								?>
                        		>Balcony<br>
                        		<input type="checkbox" name="features[]" value="Lift"
                        		<?php
			                    if(in_array('Lift', $x)){
								echo "checked";
								}

								?>
                        		>Lift<br>
                        		<input type="checkbox" name="features[]" value="24 hour emergency helpline"
                        		<?php
			                    if(in_array('24 hour emergency helpline', $x)){
								echo "checked";
								}

								?>
                        		>24 hour emergency helpline<br>
                        		<input type="checkbox" name="features[]" value="5 min walk from south"
                        		<?php
			                    if(in_array('5 min walk from south', $x)){
								echo "checked";
								}

								?>
                        		>5 min walk from south<br>      
                        		<input type="checkbox" name="features[]" value="Communal Roof terrace"
                        		<?php
			                    if(in_array('Communal Roof terrace', $x)){
								echo "checked";
								}

								?>
                        		>Communal Roof terrace<br>
                        		<input type="checkbox" name="features[]" value="Communal garden"
                        		<?php
			                    if(in_array('Communal garden', $x)){
								echo "checked";
								}

								?>
                        		>Communal garden<br>
                        		<input type="checkbox" name="features[]" value="Dedicated property Manager forthe building"
                        		<?php
			                    if(in_array('Dedicated property Manager forthe building', $x)){
								echo "checked";
								}

								?>
                        		>Dedicated property Manager for the building<br>
                        
				    	
				    	        </div>
                        	

                        <input type="submit" name="v" value="Submit" class="btn btn-info">

		    			
		    		</form>   
			    
		       
		</div><!---container end--->
	</div><!---container-fluid end--->

</body>
</html>