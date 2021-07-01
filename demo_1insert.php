<?php


include "dbcon.php";

$username = $_POST['a'];
$password = $_POST['b'];
$email = $_POST['c'];
$phone = $_POST['d'];
$city = $_POST['e'];
$address = $_POST['f'];
$pincode = $_POST['g'];




$data = "insert into demo(username,password,email,phone,city,address,pincode)value('$username','$password','$email','$phone','$city','$address','$pincode')" ;
mysqli_query($con,$data);



?>