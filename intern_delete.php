<?php


include "dbcon.php";
$id = $_GET['a'];

$display = "delete from form where id = $id";
mysqli_query($con,$display);
header('location:displayform.php');



?>