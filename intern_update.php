<?php

include "dbcon.php";
$id = $_POST['id'];


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$qualification = $_POST['qualification'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$course = $_POST['course'];

// echo $name,$email,$phone,$address,$gender,$college,$qualification,$branch,$semester,$course;

$data = "update form SET name='$name', email='$email', phone='$phone', address='$address', gender='$gender', college='college', qualification='$qualification', branch='$branch', semester='$semester', course='$course' where id = $id";

mysqli_query($con,$data);

header('location:displayform.php');
?>