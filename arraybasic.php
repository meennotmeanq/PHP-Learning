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

//array_push เพิ่มจากท้าย
array_push($fruits, "มะม่วง", "มังคุด");
print_r($fruits);
print("<br>");

//array_pop ลบจากท้าย
array_pop($fruits);
print_r($fruits);
print("<br>");

//เพิ่มจากหน้าสุด
array_unshift($fruits, "แอปเปิล", "เงาะ");
array_unshift($fruits, "มะพร้าว");
print_r($fruits);
print("<br>");

//ลบจากหน้าสุด
array_shift($fruits);
print_r($fruits);
print("<br>");

// ลบ array_splice("ชื่อ array", "ตำแหน่ง index", "จำนวนที่ต้องการลบ");
// เพิ่ม array_splice("ชื่อ array", "ตำแหน่ง index", array("ข้อมูล","ข้อมูล"));
print_r($fruits);
print("<br>");

array_splice($fruits, 1, 0, array("องุ่น", "มะม่วง"));
print_r($fruits);
print("<hr>");

// แบบเดี่ยว
$number = [10, 2, 3, 45, 150, 60, -10, 30, 40, 50, 60, 70];
$city = ["ชลบุรี", "ระยอง", "ระนอง", "กาญจนบุรี", "US" => "สหรัฐอเมริกา", "CN" => "จีน"];

//sort เรียงลำดับข้อมูลเดี่ยว จากน้อยไปมาก
print_r($number);
print("<br>");
sort($number); //เรียงลำดับ ข้อมูลเดี่ยว
print_r($number);
print("<br>");
//rsort เรียงลำดับข้อมูลเดี่ยว จากมากไปน้อย
rsort($number); //เรียงลำดับย้อนกลับ ข้อมูลเดี่ยว
print_r($number);
print("<hr>");
print_r($city);
print("<br>");
sort($city);
print_r($city);
print("<br>");
rsort($city);
print_r($city);
print("<hr>");


// แบบคู่
$arr = ["A" => 20, "B" => 15, "C" => 30, "D" => 25];
$country = ["TH" => "ไทย", "JP" => "ญี่ปุ่น", "US" => "สหรัฐอเมริกา", "CN" => "จีน"];

//asort เรียงลำดับ values ข้อมูลคู่ จากน้อยไปมาก
print_r($arr);
print("<br>");
asort($arr); // เรียงน้อยไปมาก
print_r($arr);
print("<br>");
//arsort เรียงลำดับ values ข้อมูลคู่ จากมากไปน้อย
arsort($arr); // เรียงมากไปน้อย
print_r($arr);
print("<hr>");

print_r($country);
print("<br>");
asort($country); // เรียงน้อยไปมาก
print_r($country);
print("<br>");
arsort($country); // เรียงมากไปน้อย
print_r($country);
print("<hr>");

//ksort เรียงลำดับ index ข้อมูลคู่ จากน้อยไปมาก
print_r($arr);
print("<br>");
ksort($arr); // เรียง key index จากน้อยไปมาก
print_r($arr);
print("<br>");
//krsort เรียงลำดับ index ข้อมูลคู่ จากมากไปน้อย
krsort($arr); // เรียง key index จากมากไปน้อย
print_r($arr);
print("<hr>");

print_r($country);
print("<br>");
ksort($country); //เรียง key index จากน้อยไปมาก
print_r($country);
print("<br>");
krsort($country); //เรียง key index จากมากไปน้อย
print_r($country);
print("<hr>");

// shuffle เป็นการสลับ values แบบสุ่ม
print_r($country);

shuffle($country); //สลับค่า
print("<br>");
print_r($country); // ผลการสลับ
print("<hr>");

$number = range(1, 10);
print_r($number);
print("<br>");

// array_reverse เป็นการ reverse array ทั้งก้อน
$new_number = array_reverse($number);
print_r($new_number);
print("<hr>");

//แบบเดี่ยว
$number = [10, 20, 15, 20, 30, 10, 20];
//แบบคู่
$colors = ["red" => "สีแดง", "yellow" => "สีเหลือง", "green" => "สีเขียว"];

// array_keys ดึงค่า index ใน array มาแสดง
$colors_keys = array_keys($colors); //ดึง keys
// array_values ดึงค่า values ใน array มาแสดง
$colors_values = array_values($colors); // ดึง values

print_r($colors);
print("<br>");
print_r($colors_keys);
print("<br>");
print_r($colors_values);
print("<hr>");

//array_flip สลับค่า index กับ value
print_r($colors);
$result = array_flip($colors);
print("<br>");
print_r($result);
print("<hr>");

// array_unique ทำการลบค่าซ้ำซ้อน
print_r($number);
print("<br>");
$result = array_unique($number);
print_r($result);
print("<hr>");

//array_key_exists(); มี index อยู่ใน Array หรือไม่ คำตอบเป็น boolean
if (array_key_exists("red", $colors)) {
    print("พบคีย์ red ใน Array Colors");
} else {
    print("ไม่พบคีย์");
}
//in_array มี value อยู่ใน Array หรือไม่ คำตอบเป็น boolean
if (in_array("สีชมพู", $colors)) {
    print("พบค่า สีชมพู ใน Array Colors");
} else {
    print("ไม่พบ");
}
print("<hr>");

$arr1 = ["product" => "โต๊ะ", "color" => "สีส้ม", "price" => 500];
$arr2 = ["discount" => 100, "delivery" => 30, "price" => 2000];

//array_merge นำข้อมูลมาซ้อนท้าย ถ้า index ซ้ำกัน จะใช้ตัวหลัง
$result = array_merge($arr1, $arr2);
print_r($result);
print("<br>");

//array_merge_recursive นำข้อมูลมาต่อท้าย index ที่ซ้ำกันจะถูกสร้าง Array ย่อย
$result = array_merge_recursive($arr1, $arr2);
print_r($result);
print("<br>");

//array_combine($KEYS, $VALUES)
$arr1 = ["dog", "cat", "pig", "ant"];
$arr2 = ["หมา", "แมว", "หมู", "มด"];
$result = array_combine($arr1, $arr2);
print_r($result);
