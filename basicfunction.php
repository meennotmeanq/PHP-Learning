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
