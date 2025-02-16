<?php
    $number = 153;

    $x = $number;
    $count = 0;
    $sum = 0;
    $n = strlen((string)$number);

    while($x > 0)
    {
        $rem = $x % 10;
        $sum += $rem ** ($n);
        $x = intdiv($x, 10);
    }

    if ($number == $sum){
	echo "The number $sum is an Armstrong number!<br>";
    }

    else{
	echo "Not an Armstrong number! $sum";
    }
    echo "Code By Manan Batra 114";
?>