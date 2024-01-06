<?php 
//arithmetic operators
$num1 = 4;
$num2 = 5;
$sum = $num1 + $num2;
echo $sum;
echo "\n";

$subtract = $num2 - $num1;
echo $subtract;
echo "\n";

$product = $num1 * $num2;
echo $product;
echo "\n";

$division = $num1 / $num2;
echo $division;
echo "\n";

$remainder = $num1 % $num2;
echo $remainder;
echo "\n";

$power = $num1 ** $num2;
echo $power;
echo "\n";

//assignment operators
$num3 = 10;
$num3 += $num1;  //$num3 = $num3 + $num1
echo $num3;
echo "\n";

$num3 -= $num2;
echo $num3;
echo "\n";

$num3 *= $num1;
echo $num3;
echo "\n";

$num3 /= $num1;
echo $num3;
echo "\n";


$num3 %= $num1;
echo $num3;
echo "\n";

//comparison operators
$num4 = '10';
$num5 = 10;

var_dump($num4 == $num5); 
echo "\n";
var_dump($num4 === $num5);
echo "\n";
var_dump($num1 > $num2);
echo "\n";
var_dump($num1 < $num2);
echo "\n";
var_dump($num4 >= $num5);
echo "\n";
var_dump($num4 <= $num5);
echo "\n";
var_dump($num4 != $num5);
echo "\n";
var_dump($num4 !== $num5);
echo "\n";
var_dump($num4 <> $num5);
echo "\n";
var_dump($num2 <=> $num1);
echo "\n";

//increment / decrement operators
$num6 = ++$num1;  
echo $num6;
echo "\n";
$num7 = $num2++;
echo $num7;
echo "\n";

$num6 = --$num1;
echo $num6;
echo "\n";
$num7 = $num2--;
echo $num7;
echo "\n";

//logical operators

//OR
var_dump($num1 < $num2 or $num6 > $num7);
var_dump($num1 < $num2 || $num6 > $num7);

//AND
var_dump($num1 < $num2 and $num6 > $num7);
var_dump($num1 < $num2 && $num6 > $num7);

//NOT
var_dump(!($num1 < $num2));

//turnary operator
$year = $num1 > $num2 ? "2024" : "2023";
echo $year;
echo "\n";
?>

