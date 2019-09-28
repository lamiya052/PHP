<!DOCTYPE html>
<html>
<body>

<?php

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x+$y);
echo "<br>";
var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";
var_dump($x!=$y);
echo "<br>";
var_dump($x<>$y);
echo "<br>";
var_dump($x!==$y);


?>  

</body>
</html>