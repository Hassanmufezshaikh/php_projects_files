<?php 

 $a = 665;
 $b = 9;


 if($a > 78)
 {
     echo "a is greater than 78";
 }
 else
 {
     echo "a is not greater than 78";
 }
echo "<br>";

$age = 19;  

 //if else ladder
 if ($age>18){
    echo "You can drink water with chai and alcohol";
 }  // else if condition is used when if condition fails then it will go to else if condition
 elseif($age>13){
     echo "You can drink chai only with water. No alcohol for you";
 }
 else{
    echo "You can drink water only";
}

echo "<br>";
if ($age>18){
    echo "You can drink water with chai and alcohol <br>";
}

if($age>13){
    echo "You can drink chai only with water. No alcohol for you<br>";
}
else{
    echo "You can drink water only<br>";
}
echo "<br>";

// Quick quiz - 
// 1. Create an if else ladder using more than one elseif 
// 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
// and less than or equal to 65

echo "Done"; 
?>

<?php 
echo "<br>";

$driver = 30;
if ($driver > 65)
{
 echo " you can driver car but not alone";
}
else if($driver >25)
 {
    echo " you can drive th car";
 }
 else
 {
echo " cannot drive the car";
 }
?>

