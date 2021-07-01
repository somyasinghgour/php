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
		    		<form method="post" action="property_insert.php">
		    			<div class="form-group">
				    		<label>Property Address</label>
				    	    <input type="text" name="address" class="form-control" placeholder="Enter Address">
				    	</div>
				    	<div class="row">
				    		<div class="col-md-4">
				    		    <div class="form-group">
				    			<label>Latitude</label>
				    	    	<input type="text" name="latitude" class="form-control" placeholder="Enter Latitude">
				    	        </div>
				    		</div><!--col-4 end-->

				    		<div class="col-md-4">
				    		    <div class="form-group">
				    			<label>Longitude</label>
				    	    	<input type="text" name="longitude" class="form-control" placeholder="Enter Longitude">
				    	        </div>
				    		</div><!--col-4 end-->

				    		<div class="col-md-4">
				    		    <div class="form-group">
				    			<label>Zip Code</label>
				    	    	<input type="text" name="zipcode" class="form-control" placeholder="Enter Zip Code">
				    	        </div>
				    		</div><!--col-4 end-->
				    	</div>
				    	<div class="form-group">
				    			<label>Floor</label><br>
				    			<input type="radio" name="floor" value="Ground">Ground	
				    			<input type="radio" name="floor" value="First">First
				    			<input type="radio" name="floor" value="Second">Second
				    			<input type="radio" name="floor" value="Third">Third

				    	</div>
				    	<div class="form-group">
				    			
				    		<label>City</label>
				    		<select class="form-control" name="city"> 
				    		<option>Select</option>
				    		<option>Gwalior</option>
				    		<option>Bhopal</option>
				    		<option>Jhansi</option>				    				
				    		<option>OTHERS</option>
				    		</select>
				    	</div>
				    	<div class="row">
				    		<div class="col-md-6">
				    			<div class="form-group">
				    			<label>Sale or rent Price</label>
				    	    	<input type="text" name="saleprice" class="form-control" placeholder="Enter only digits">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Area Size</label>
				    	    	<input type="text" name="areasize" class="form-control" placeholder="Enter only digits">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Bedroom</label>
				    	    	<input type="text" name="bedroom" class="form-control" placeholder="">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Reception</label>
				    	    	<input type="text" name="reception" class="form-control" placeholder="">
				    	        </div>
				    			
				    		</div>
				    		<div class="col-md-6">
				    			<div class="form-group">
				    			<label>Price Postfix</label>
				    	    	<input type="text" name="ppostfix" class="form-control" placeholder="">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Size Postfix</label>
				    	    	<input type="text" name="spostfix" class="form-control" placeholder="">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Bathroom</label>
				    	    	<input type="text" name="bathroom" class="form-control" placeholder="">
				    	        </div>
				    	        <div class="form-group">
				    			<label>Garage</label>
				    	    	<input type="text" name="garage" class="form-control" placeholder="">
				    	        </div>
				    			
				    		</div>
				    	</div><!--row end-->
                        
                        	    <div class="form-group">
				    	 		<label>Features</label><br>
				    			<input type="checkbox" name="features[]" value="Air Conditioner">Air Conditioner<br>
                        		<input type="checkbox" name="features[]" value="CCTV">CCTV<br>      
                        		<input type="checkbox" name="features[]" value="Balcony">Balcony<br>
                        		<input type="checkbox" name="features[]" value="Lift">Lift<br>
                        		<input type="checkbox" name="features[]" value="24 hour emergency helpline">24 hour emergency helpline<br>
                        		<input type="checkbox" name="features[]" value="5 min walk from south">5 min walk from south<br>      
                        		<input type="checkbox" name="features[]" value="Communal Roof terrace">Communal Roof terrace<br>
                        		<input type="checkbox" name="features[]" value="Communal garden">Communal garden<br>
                        		<input type="checkbox" name="features[]" value="Dedicated property Manager forthe building">Dedicated property Manager for the building<br>
                        
				    	
				    	        </div>
                        	
                        	

                        <input type="submit" name="" value="Submit" class="btn btn-info">

		    			
		    		</form>   
			    
		       
		</div><!---container end--->
	</div><!---container-fluid end--->

</body>
</html>