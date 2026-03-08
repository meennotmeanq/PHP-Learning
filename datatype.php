<?php
$price = 50; // integer
$score = 90.58; // double-float
$name = "kaveekit"; // string
$isvalid = true; // boolean

echo "ราคาสินค้า : " . $price . "<br>";
echo "คะแนน : " . $score . "<br>";
echo "ชื่อ : " . $name . "<br>";
echo "สถานะ : " . $isvalid . "<br>";

echo "<hr>";

echo gettype($name) . "<br>";
echo gettype($isvalid) . "<br>";
echo gettype($score) . "<br>";
echo gettype($price);

echo "<hr>";
echo "ก่อนเปลี่ยน - " . gettype($score) . "<br>";
settype($score, "integer");
echo "หลังเปลี่ยน - " . gettype($score) . "<br>";
