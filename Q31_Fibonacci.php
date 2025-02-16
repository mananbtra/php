<?php
	$num = 0;
	$num2 = 1;
	$temp = 0;
	for($i = 0; $i<10; $i++){
		$temp = $num2;
		echo $num. "<br>";
		$num2 = $num + $num2;
		$num = $temp;
	}
	echo "Code By Manan Batra 114"
?>