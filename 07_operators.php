<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 45;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";
 
// 2. Assignment Operators
 $x = $a;
 echo "For x, the value is ". $x . "<br>";

 $a += 6;
 echo "For a, the value is ". $a . "<br>";

 $a -= 6;
 echo "For a, the value is ". $a . "<br>";

 $a *= 6;
 echo "For a, the value is ". $a . "<br>";

 $a /= 4;
 echo "For a, the value is ". $a . "<br>";

 $a %= 5; // $a = $a % 5
 echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;

echo "For x > y, the result is  ". "<br>";
echo var_dump($x > $y);
echo "<br>";

echo "For x > y, the result is ". "<br>";
echo var_dump($x >= $y);
echo "<br>";

echo "For x < y, the result is ". "<br>";
echo var_dump($x < $y);
echo "<br>";

echo "For x < y, the result is ". "<br>";
echo var_dump($x <= $y);

echo "<br>";
echo "For x <> y, the result is ". "<br>"; 
echo var_dump($x <> $y);// not equal to symbol
echo "<br>";


// 4. Logical Operators

$m = true;
$n = true;

echo "For m and n, the result is "; 
echo var_dump($m and $n); // and means both values should be true then only true.
echo "<br>"; // if both also true, then only these is true or false.

echo "For m && n, the result is "; // same as and 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; // any one object should be true btw 2 objects
echo var_dump($m or $n); // then it is true.
echo "<br>";

echo "For m || n, the result is "; // same as or
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; //not ! assigns true to false , false to true.
echo var_dump(!$m);
echo "<br>";



?>
