<?php
	class greeting
	{
		public $str = "Hello ";

		function show_greeting()
        	{
            		return $this->str;
        	}	
	}

	$message = new greeting;
    	var_dump($message);
	echo "<br><br>". $message->show_greeting(). "RakeshJi<br>";
	echo "Code By Manan Batra 114";
?>