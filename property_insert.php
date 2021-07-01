<?php

include "dbcon.php";

$address=$_POST['address'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$zipcode=$_POST['zipcode'];
$floor=$_POST['floor'];
$city=$_POST['city'];
$saleprice=$_POST['saleprice'];
$areasize=$_POST['areasize'];
$bedroom=$_POST['bedroom'];
$reception=$_POST['reception'];
$pricepostfix=$_POST['ppostfix'];
$sizepostfix=$_POST['spostfix'];
$bathroom=$_POST['bathroom'];
$garage=$_POST['garage'];
$features=$_POST['features'];


$a=implode(',',$features);
// $b=implode(',',$type);
// $c=implode(',',$propertycity);


$data="insert into property(address, latitude, longitude, zipcode, floor, city, saleprice, areasize, bedroom, reception, pricepostfix, sizepostfix, bathroom, garage, features, type, propertycity)value('$address','$latitude','$longitude','$zipcode','$floor','$city','$saleprice','$areasize','$bedroom','$reception','$pricepostfix','$sizepostfix','$bathroom','$garage','$a')";

mysqli_query($con,$data);

?>