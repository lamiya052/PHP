<!DOCTYPE html>
<html>
<body>

<?php

class car
{
	function car()
	{
		$this->model="VW";
	}
}
// create an object
$herbie = new car();
// show object properties
echo $herbie-> model;


?>

</body>
</html>