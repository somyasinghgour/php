<?php


include "dbcon.php";
$id = $_GET['a'];

$display = "delete from employee where id = $id";
mysqli_query($con,$display);
header('location:emp_display.php');



?>