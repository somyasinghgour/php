<?php


include "dbcon.php";

$n = $_POST['a'];
$e = $_POST['b'];
$t = $_POST['c'];


$data = "insert into task(name,email,city)value('$n','$e','$t')" ;
mysqli_query($con,$data);



?>