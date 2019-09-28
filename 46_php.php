<!DOCTYPE html>
<html>
<body>

<?php

//Sort Array in descending Order-rsort()
$numbers = array(4,2,11,8,23);
rsort($numbers);

$arrlength=count($numbers); 
for($x=0;$x<arrlength;$x++)
{
	echo $numbers[$x];
	echo "<br>";
}



?>
</body>
</html>
