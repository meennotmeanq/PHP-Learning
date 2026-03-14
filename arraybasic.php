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

foreach ($fruits as $item) {
    print($item . "<br>");
}

print_r(array_count_values($number));
print("<br>" . "จำนวนสมาชิกมีค่า = " . $total . "<hr>");

//แบบคู่
$colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
$animals = ["dog" => "สุนัข", "cat" => "แมว", "pig" => "หมู", "rabbit" => "กระต่าย"];

foreach ($colors as $key => $values) {
    print("Key = " . $key . " => " . "Values = " . $values .  "<br>");
}
print("<br>");
foreach ($animals as $key => $values) {
    print("Key = " . $key . " => " . "Values = " . $values .  "<br>");
}
//! เข้าถึง Array ด้วยการ While Loop ใช้ฟังก์ชั่น each ในการอ่านค่า array ทั้งข้อมูลและอินเด็กซ์ function each ถูก PHP เอาออกไปตั้งแต่ version 8.0 ให้ใช้ foreach แทน
print("<hr>");

//แบบ 2 มิติ
$products = array(
    array("คีย์บอร์ด", "keyboard", 900),
    array("เมาส์", "mouse", 1900),
    array("โต๊ะ", "table", 2500),
    array("จอ", "monitor", 12000),
);

//การเข้าถึง => แถว , คอลัมน์
print($products[1][1] . "<hr>");
//For Loop
for ($row = 0; $row < count($products); $row++) {
    print("ชิ้นที่ " . $row . "<br>");
    for ($column = 0; $column < count($products[$row]); $column++) {
        print("สินค้า " . ($products[$row][$column]) . "<br>");
    }
    print("<hr>");
}
$products = array(
    array("TH" => "คีย์บอร์ด", "EN" => "keyboard", "Price" => 900),
    array("TH" => "เมาส์", "EN" => "mouse", "Price" => 1900),
    array("TH" => "โต๊ะ", "EN" => "table", "Price" => 2500),
    array("TH" => "จอ", "EN" => "monitor", "Price" => 12000),
);

//For Each
foreach ($products as $product) {
    print("ชื่อสินค้า TH = " . $product["TH"] . "<br>");
    print("ชื่อสินค้า EN = " . $product["EN"] . "<br>");
    print("ราคา = " . $product["Price"] . " บาท");
    print("<hr>");
}

$fruits = ["มะละกอ", "ฝรั่ง", "มะนาว", "ทุเรียน"];
print_r($fruits);
print("<br>");

array_push($fruits, "มะม่วง", "มังคุด");
print_r($fruits);
print("<br>");

array_pop($fruits);
print_r($fruits);
print("<br>");

array_unshift($fruits, "แอปเปิล", "เงาะ");
array_unshift($fruits, "มะพร้าว");
print_r($fruits);
print("<br>");

array_shift($fruits);
print_r($fruits);
print("<br>");

// array_splice("ชื่อ array", "ตำแหน่ง index", "จำนวนที่ต้องการลบ");
print_r($fruits);
print("<br>");

array_splice($fruits, 1, 0, array("องุ่น", "มะม่วง"));
print_r($fruits);
