<?php

include "dbcon.php";

$name = $_POST['name'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$education = $_POST['education'];

// echo"<pre>";
// print_r($education);
$a=implode(',',$education);//array to string conversion.
//echo $a;
$data = "insert into form1(name,college,gender,education)value('$name', '$college', '$gender', '$a')";
mysqli_query($con,$data);



?>