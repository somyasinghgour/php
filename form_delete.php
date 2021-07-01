<?php


include "dbcon.php";
$id = $_GET['a'];

$display = "delete from form1 where id = $id";
mysqli_query($con,$display);
header('location:form_display.php');



?>