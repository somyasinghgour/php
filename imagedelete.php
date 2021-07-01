<?php


include "dbcon.php";
$id = $_GET['a'];

$display = "delete from image where id = $id";
mysqli_query($con,$display);
header('location:image_display.php');



?>