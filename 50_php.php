<!DOCTYPE html>
<html>
<body>

<?php
//The following example sorts an associative array in descending order, according to the key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>