<?php
	echo "<h1>Associative Array</h1>";
	
	$student = array("Ramesh"=>1000, "Ramesh"=>1500, "Suresh"=>2000);
	
	echo "Pocket Money of Rakeshis: ". $student['Ramesh']. "<br>";
	echo "Pocket Money of Ramesh is: ". $student['Ramesh']. "<br>";
	echo "Pocket Money of Suresh is: ". $student['Suresh']. "<br><br>";

	$student['Ramesh'] = "High";
	$student['Ramesh'] = "Medium";
	$student['Suresh'] = "Low";
	
	echo "Pocket Money of Rakeshis: ". $student['Ramesh']. "<br>";
	echo "Pocket Money of Ramesh is: ". $student['Ramesh']. "<br>";
	echo "Pocket Money of Suresh is: ". $student['Suresh']. "<br><br>";

	echo "Code By Manan Batra 114";
?>