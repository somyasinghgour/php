<?php

include "dbcon.php";
$id = $_POST['id'];


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];



// echo $name,$email,$phone,$password;
//die;

$data = "update employee SET name='$name', email='$email', phone='$phone', password='$password' where id = $id";

mysqli_query($con,$data);

header('location:emp_display.php');
?>

