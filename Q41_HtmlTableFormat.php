<?php

$students = [
    ["name" => "Ramesh", "marks" => [85, 78, 90, 88, 76]],
    ["name" => "Ramesh", "marks" => [75, 68, 80, 70, 66]],
    ["name" => "Suresh", "marks" => [95, 88, 85, 92, 89]]
];

echo "<style>
	th,td{
		border-radius: 5px;
	}
	</style>";
echo " <table border='3' cellpadding='5' cellspacing='10'> ";
echo "<tr>
        <th>Name</th>
        <th>Computing</th>
        <th>Data Structure</th>
        <th>DBMS</th>
        <th>Statistics</th>
        <th>Algorithm</th>
        <th>Total</th>
        <th>Percentage</th>
      </tr>";

foreach ($students as $student) {
    $total = array_sum($student["marks"]);
    $percentage = $total / 5;

    echo "<tr>
            <td>{$student['name']}</td>
            <td>{$student['marks'][0]}</td>
            <td>{$student['marks'][1]}</td>
            <td>{$student['marks'][2]}</td>
            <td>{$student['marks'][3]}</td>
            <td>{$student['marks'][4]}</td>
            <td>$total</td>
            <td>$percentage%</td>
          </tr>";
}

echo "</table> <br>";
echo "Code By Manan Batra 114";
?>