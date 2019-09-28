<!DOCTYPE html>
<html>
<body>
<?php

$x = 5; // global scope
 
function myTest() 
{
    //variable declared in a function has a LOCAL SCOPE and can only be accessed in that function:
	
	$x=15; // local scope
    echo $x; //Variable x inside function is:$x
} 
myTest(); //run functionj

echo "<br>";
echo $x; //Variable x outside function is:$x

?>

</html>
</body>