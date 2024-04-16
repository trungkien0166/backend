<?php
$a = 5;
echo $a; //5
echo '<br>';

// Phép gán có 2 bước:
// 1. Gán giá trị vào biến ($b)
// 2. Trả về giá trị của phép gán (5)
echo $b = 5; //5

$a = $b = $c = 9;
//a: 9, b: 9, c: 9

echo '<br>';
// các giá trị được xem là false: false, null, '', 0
if (4) {
    echo 'con gà';
}

$c1 = 5;
$c2 = 7;
echo '<br>';
if ($c1 == $c2) {
    echo 'con vịt';
}

if ($c1 = $c2) {
    echo 'con cá';
}