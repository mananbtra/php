<?php
	$num = 10;
	$num2 = 20;
	$result = $num < $num2 ? "$num" : "$num2";
	echo "The HCF of $num & $num2 is: ";
	for ($i = $result; $i>=0; $i--){

		if( ($num % $i == 0) and ($num2 % $i == 0) ){
			echo $i;
			break;
		}
	}
echo "Code By Manan Batra 114";
?>