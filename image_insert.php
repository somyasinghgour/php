<?php

include "dbcon.php";
$name=$_POST['name'];
$image=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];

// echo $name,$image;
// echo"<pre>";
// print_r($image);

$file = "upload/".$image;

move_uploaded_file($filename, $file);
$data="insert into image(name,image)value('$name','$file')";
mysqli_query($con,$data);
?>