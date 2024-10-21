<!DOCTYPE html>
<html>
<body>

<?php
// Operators
$x = 10;  
$y = 6;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";
echo $x % $y . "<br>";
echo $x ** $y . "<br><br>";

// Comparation Operators
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>

</body>
</html>