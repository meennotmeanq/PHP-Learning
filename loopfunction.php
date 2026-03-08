<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue;
    echo  "รอบที่ " . $i . "<br>";
    if ($i == 6) break;
}
exit;
echo "จบการทำงานของโปรแกรม";
