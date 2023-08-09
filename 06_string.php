<?php


$name = "mufez";
$names = " cycling is relaxing effect due to uniform movement";

echo $names ;
echo "<br> ";
echo " the length of the " ." string is ".strlen($name);
echo "<br> ";
echo strpos( $names , "effect");
echo "<br> ";
echo str_replace("cycling", "running",$names);
echo "<br> ";
echo "<br> ";
echo str_repeat($names, 20);
echo "<br> ";
echo "<br> ";
echo "<pre>";
echo rtrim("      relaxing effect due to uniform movement        ");
echo "<br> ";
echo ltrim("      relaxing effect due to uniform movement        ");
echo "</pre>";
?>