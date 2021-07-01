<?php

include "dbcon.php";

$id = $_GET['a'];

$display = "select * from form1 where id =$id";
$result = mysqli_query($con,$display);

$data = mysqli_fetch_array($result);

$a = $data['education'];
$b= explode(',', $a);
// echo"<pre>";
// print_r($b);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="post" action="form_update.php">
		<input type="hidden" name="id" value="<?php echo $data['id']?>">
    
		Name:<input type="text" name="name" value="<?php echo $data['name']?>">
   
		<br>
		<br>
 		College:
 		<select name="college">
			<option value="select">Select</option>
			<option value="rjit"
			<?php
              if($data['college']=='rjit'){
              	echo "selected";
              }


			?>
			>RJIT</option>
			<option value="mpct"
			<?php
              if($data['college']=='mpct'){
              	echo "selected";
              }


			?>
			>mpct</option>
			<option value="itm"
			<?php
              if($data['college']=='itm'){
              	echo "selected";
              }


			?>
			>itm</option>
			<option value="jaincollege"
			<?php
              if($data['college']=='jaincollege'){
              	echo "selected";
              }


			?>
			>jain college</option>
		    </select>
			<br>
			<br>
		Gender:
		<input type="radio" name="gender" value="male"
		<?php
              if($data['gender']=='male'){
              	echo "checked";
              }


		?>
		>Male
	           <input type="radio" name="gender" value="female"
	           <?php
              if($data['gender']=='female'){
              	echo "checked";
              }


		       ?>
	           >FeMale
	           <input type="radio" name="gender" value="other">other
               <br>
               <br>
		Education:<input type="checkbox" name="education[]" value="mca"
		<?php
			if(in_array('mca', $b)){
				echo "checked";
			}

		?>

		>MCA
        <input type="checkbox" name="education[]" value="ca"
        <?php
			if(in_array('ca', $b)){
				echo "checked";
			}

		?>
        >CA      
        <input type="checkbox" name="education[]" value="ma"
        <?php
			if(in_array('ma', $b)){
				echo "checked";
			}

		?>
		>MA
        <input type="checkbox" name="education[]" value="bba"
        <?php
			if(in_array('bba', $b)){
				echo "checked";
			}

		?>
		>BBA

        <br>
        <br>
		<input type="submit" name="v" value="Submit">
		


	</form>

</body>
</html>