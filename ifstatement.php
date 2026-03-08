<?php

// $balance = 1000;
// $withdraw = -500;

// $a = $withdraw <= $balance; // ผลการเปรียบเทียบจำนวนเงิน
// $b = $withdraw > 0; //ถอนเงินมีค่ามากกว่า 0

// echo "เงินในบัญชี = " . $balance . "<br>";
// echo "จำนวนเงินที่ถอน = " . $withdraw . "<br><hr>";

// if (!($withdraw <= $balance) || $withdraw > 0) {
//     echo "สามารถกดเงินได้ <br>";
//     $balance -= $withdraw;
//     echo "ยอดคงเหลือ = " . $balance . "<br>";
// } else {
//     echo "ยอดคงเหลือไม่พอ <br>";
// }
// echo "คืนบัตรกดเงิน";

// $width = 14;
// $height = 22;

// if ($width > 0 && $height > 0) {
//     $area = $width * $height;
//     echo "พื้นที่สี่เหลี่ยม = " . $area . " ตารางนิ้ว";
// } else {
//     echo "ต้องป้อนตัวเลขความกว้างและความยาวมากกว่า 0";
// }

$score = 20;
$grade = null;

if ($score >= 80) {
    $grade = "A";
} elseif ($score >= 70) {
    $grade = "B";
} elseif ($score >= 60) {
    $grade = "C";
} elseif ($score >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "คะแนนของคุณ คือ " . $score . " เกรดที่ได้ = " . $grade;
