<!DOCTYPE html>
<html>
<body>

<?php

$x=5;
$y=10;

function mytest()
{	
	//PHP also stores all global variables in an array called $GLOBALS[index].
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

mytest();

echo $y;
?>

</body>
</html>