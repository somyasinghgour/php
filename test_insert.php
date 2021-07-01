<?php


include "dbcon.php";

$name = $_POST['a'];
$city = $_POST['b'];
$phone = $_POST['c'];
$email = $_POST['d'];
$address = $_POST['e'];
$college = $_POST['college'];

$data = "insert into test(name,city,phone,email,address,college)value('$name','$city','$phone','$email','$address','$college')" ;
mysqli_query($con,$data);

?>