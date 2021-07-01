<?php
include "dbcon.php";

$u = $_POST['x'];
$p = $_POST['y'];

// print_r($a);

//echo $u,$p;

$data = "insert into student(username,password)value('$u','$p')" ;
mysqli_query($con,$data);


?>
