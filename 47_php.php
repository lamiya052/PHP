<!DOCTYPE html>
<html>
<body>

<?php

//The following example sorts an associative array in ascending order, according to the value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x=>$x_value)
{
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}

?>
</body>
</html>
