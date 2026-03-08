<?php
$price = 100.17;
$delivery = 50.99;


$total = $price + $delivery;



echo "ก่อนแปลง = " . gettype($total) . "<br>";
echo $total . "<br>";

// type casting
$total = (int)$total;
echo "หลังแปลง = " . gettype($total) . "<br>";
echo $total . "<br>";

echo "<hr>";

$sum = "400.89";
echo "ก่อนแปลง = " . gettype($sum) . "<br>";
echo $sum . "<br>";

$sum = (float)$sum;
echo "หลังแปลง = " . gettype($sum) . "<br>";
echo $sum . "<br>";

echo "<hr>";

$a = (int) 10.9;
$b = (int) 20.5;

$c = $a + $b;

echo $c;
