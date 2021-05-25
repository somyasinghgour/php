<?php

$courses = array ("name"=>"ram" , "city"=>"gwalior" ,"php"=>"12000");
// echo "<pre>";
// print_r($courses);

echo $courses["name"];

foreach ($courses as $key => $value) {
	echo $key. " " .$value ."<br/>";
}
	foreach ($courses as $a) {
		echo $a;
	}

?>