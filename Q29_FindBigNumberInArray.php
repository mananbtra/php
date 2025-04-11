<?php
	$arr = array(1,2,3,4,5,6);
	$big = 0;
	foreach($arr as $x){
		if($big < $x){
			$big = $x;
		}
	}
	echo "The Biggest Number in the array is: ". $big;
	echo "Code By Manan Batra 114";
?>