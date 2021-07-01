<?php

include "dbcon.php";
$id = $_POST['id'];

$u = $_POST['x'];
$p = $_POST['y'];

$data= "update student SET username='$u', password='$p' where id = $id";

mysqli_query($con,$data);

header('location:display.php');
?>