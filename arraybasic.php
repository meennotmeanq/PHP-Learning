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
print("<hr>");

$room = ["A01" => "สมชาย", "A02" => "สมหญิง", "A03" => "สมปอง"];
print_r($room);
print("<hr>");
$colors = ["yellow" => "สีเหลือง", "red" => "สีแดง"];
print($colors["yellow"]);
print("<hr>");

//แบบเดี่ยว
$number = [10, 20, 30, 10, 20, 30, 40, 10, 20, 30];
$fruits = ["ส้ม", "มะละกอ", "แอปเปิ้ล", "กล้วย", "ขนุน", "น้อยหน่า", "กล้วย", "องุ่น", "แตงโม"];

$total = count($fruits);
for ($index = 0; $index < $total; $index++) {
    print("ตำแหน่งของสมาชิก = " . $index . " = " . $fruits[$index] . "<br>");
}

print_r(array_count_values($number));
print("<br>" . "จำนวนสมาชิกมีค่า = " . $total . "<hr>");

//แบบคู่
$colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
$animals = ["dog" => "สุนัข", "cat" => "แมว", "pig" => "หมู", "rabbit" => "กระต่าย"];

foreach ($colors as $key => $values) {
    print($key . " => " . $values .  "<br>");
}
print("<br>");
foreach ($animals as $key => $values) {
    print($key . " => " . $values .  "<br>");
}
print("<hr>");
