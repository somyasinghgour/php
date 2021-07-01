<?php

include "dbcon.php";
$id = $_POST['id'];
$name =$_POST['name'];

$image=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];

//echo $name,$image;
// echo"<pre>";
// print_r($image);

$file = "upload/".$image;

//move_uploaded_file($filename, $file);

if($filename != "" )
{
	move_uploaded_file($filename, $file);
	$update = "update image set name = '$name', image = '$file' where id = '$id'";
}
else{
	$update = "update image set name = '$name' where id = '$id'";
}


//$data = "update image SET name='$name', image='$file' where id = $id ";

mysqli_query($con,$update);
header("location: image_display.php");

?>