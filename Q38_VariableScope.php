<?php
	$gl = 100; // Global Variable
	echo "Global Variable value: $gl<br>";
	function checkScope(){
		$i = 10; //Local Variable
		global $gl; //Now variable 'gl' is accessiable in this function
		//echo $GLOBALS['gl']; // Another way to print a global varibale within the function
		echo "Global Variable is Accessible within the function global variable value is: ". $gl ."<br>";
		echo "Local Variable: $i <br>";
	}
	checkScope();
	echo "$l"; //Will show an error we can't access a variable outside the function
	echo "Code By Manan Batra 114";
?>