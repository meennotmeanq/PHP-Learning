<?php
//แบบที่1
//การสร้างฟัง์ชั่น
function show($name) //parameter
{
    print("Hello <b> $name </b>");
    print("<br>");
    print("<hr>");
}
//แบบที่2
function add($number1, $number2, $number3)
{
    $result = $number1 + $number2 + $number3; //การคำนวณ
    print($number1 . " + " . $number2 . " + " . $number3 . " = " . $result);
    print("<br>");
    print("<hr>");
}

//การเรียกฟังก์ชั่น
show("meennotmeanq"); //argument
show("the Developer"); //argument

add(5, 10, 20);
add(1000, 5000, 200);

//แบบที่3
function getAddress()
{
    $x = "ชลบุรี";
    return $x;
}
function getBonus()
{
    $bonus = 0.5;
    //ประมวลผล
    return $bonus;
}
//เรียกใช้งาน
$myCity = getAddress();
print("ที่อยู่ของฉัน คือ = " . $myCity);

getBonus();
print("<br> จำนวนโบนัส = " . 10000 * getBonus());
$salary = (10000 * getBonus()) + 10000;
print("<br> เงินเดือนรวมโบนัส = " . $salary);
echo "<hr>";

//แบบที่4
// รับเงินเดือนเข้ามา
// ส่งผลการคำนวณรายได้ต่อปี

function getTotal($salary, $count)
{
    // คำนวณเงินเดือน * จำนวนเดือนที่ทำงาน
    return  $salary * $count;
}
$amount = 30000; //เงินเดือน
$month = 4;
print("เงินเดือนของฉันมีค่าเท่ากับ " . $amount . " บาท");
print("<br>");
print("ระยะเวลา = " . $month . " เดือน");
print("<br>");
$total = getTotal($amount, $month);
print("รายได้ = " . $total . " บาท");
echo "<hr>";

//ชื่อ นามสกุล ที่อยู่
function showData($fname = "ไม่ระบุ", $lname = "ไม่ระบุ", $city = "ไม่ระบุ")
{
    print("ชื่อ = " . $fname . "<br>");
    print("นามสกุล = " . $lname . "<br>");
    print("ที่อยู่ = " . $city . "<br>");
    print("<hr>");
}
//เรียกใช้งาน
showData("Kaveekit", "Sawaengha", "ชลบุรี");
showData("Jojo", "Jaidee", "น่าน");
showData("Coach", "Jaikla");

// global
$x = 100;
$y = 10;

function showNumber()
{
    global $x;
    $GLOBALS["z"] = 50000;
    // local
    print("ตัวแปร x มีค่า = " . $x);
}

showNumber();
print("<br>ค่า x = " . $x);
print("<br>ค่า z = " . $z);
