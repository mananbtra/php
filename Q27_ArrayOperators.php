<?php
	$arr1 = array("phy" => 70, "che" => 80, "math" => 90);
   	$arr2 = array("Eng" => 70, "Bio" => 80, "CompSci" => 90);
	$arr3 = $arr1 + $arr2;
	var_dump($arr3);
	echo "<br>";
	var_dump($arr1 == $arr2);
	echo "<br>";
	var_dump($arr1 != $arr2);
	echo "Code By Manan Batra 114";
?>