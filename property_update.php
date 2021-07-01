<?php

include "dbcon.php";
$id = $_POST['id'];


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
// $b=implode(',',$b);
// $c=implode(',',$c);




//echo $address, $latitude, $longitude, $zipcode, $floor, $city, $saleprice, $areasize, $bedroom, $reception, $pricepostfix, $sizepostfix, $bathroom, $garage, $a;


$data = "update property SET address='$address', latitude='$latitude', longitude='$longitude', zipcode='$zipcode', floor='$floor', city='$city',  saleprice='$saleprice',  areasize='$areasize',  bedroom='$bedroom',  reception='$reception', pricepostfix ='$pricepostfix',  sizepostfix='$sizepostfix',  bathroom='$bathroom', garage ='$garage', features ='$features' where id = $id";

mysqli_query($con,$data);

header('location:property_display.php');
?>