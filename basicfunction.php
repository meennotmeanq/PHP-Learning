<?php

//การสร้างฟัง์ชั่น
function show($name) //parameter
{
    print("Hello <b> $name </b>");
    print("<br>");
    print("<hr>");
}
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
