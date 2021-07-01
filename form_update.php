<?php

include "dbcon.php";
$id = $_POST['id'];


$name = $_POST['name'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$education = $_POST['education'];
$a=implode(',', $a);


//echo $name,$college,$gender,$education;


$data = "update form1 SET name='$name', college='$college', gender='$gender', education='$education' where id = $id";

mysqli_query($con,$data);

header('location:form_display.php');
?>