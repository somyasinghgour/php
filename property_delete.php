<?php


include "dbcon.php";
$id = $_GET['a'];

$display = "delete from property where id = $id";
mysqli_query($con,$display);
header('location:property_display.php');



?>