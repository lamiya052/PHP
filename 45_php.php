<!DOCTYPE html>
<html>
<body>

<?php

//Sort Array in descending Order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$arrlength=count($cars);
for($x=0;$x<arrlength;$x++)
{
	echo $cars[$x];
	echo "<br>";
}



?>
</body>
</html>
