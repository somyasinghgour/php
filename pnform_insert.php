<?php


include "dbcon.php";

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

$data = "insert into form(name,email,phone,address,gender,college,qualification,branch,semester,course)value('$name','$email','$phone','$address','$gender','$college','$qualification','$branch','$semester','$course')" ;
mysqli_query($con,$data);


?>