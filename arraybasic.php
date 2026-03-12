<?php
//แบบปกติ
$number1 = 1;
$number2 = 2;
$number3 = 3;

print($number3 .  "<hr>");

// array แบบเดี่ยว // การสร้างด้วย array
$number = array(10, 20, 30, 40, 50);
$total = $number[0] + $number[1];
print_r($number);
print("ผลรวม = " . $total);

echo ("<br>");

$city = array("นนทบุรี", "กรุงเทพ", "ระยอง");
$city[0] = "เชียงใหม่";
print_r($city);

echo ("<hr>");

//แบบจับคู่ Associate key => value
$room = array("A01" => "สมชาย", "A02" => "สมหมาย", "A03" => "สมปอง");

//
print($room["A02"]);

echo ("<br>");

$animal = array("dog" => "หมา", "cat" => "แมว", "pig" => "หมู");
$products = array("banana" => 50, "bags" => 15000, "table" => 500);
print($products["bags"] . "<hr>");

$alphabet = range("A", "Z", 3);

print_r($alphabet);
