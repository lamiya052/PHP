<!DOCTYPE html>

<html>
<body>

<?php

define("GREETING", "Welcome to w3 school.com!");


function mytest()
{
	echo GREETING;
}
mytest();
echo "<br>";

define("GREETING", "welcome to w3 school.com!", true);
echo greeting;

?>

</body>
</html>
