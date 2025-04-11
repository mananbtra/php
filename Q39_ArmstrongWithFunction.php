<?php
	function checkArmstrong($num){
		$number = $num;
		$result = 0;
		$n = strlen((string)$number);
		while ( $number > 0 ){
			$r = $number % 10;
			$result += $r ** $n;
			$number = intdiv($number, 10);
		}
		return ($result == $num)? "$num The number is Armstrong!" : "The number $num is not Armstrong!";
	}
	$g = checkArmstrong(153);
	//var_dump($g);
	echo "$g <br>";
	echo "Code By Manan Batra 114";
?>