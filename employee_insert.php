<?php

include "dbcon.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$data = "insert into employee(name,email,phone,password)value('$name', '$email', '$phone', '$password')";
mysqli_query($con,$data)



?>