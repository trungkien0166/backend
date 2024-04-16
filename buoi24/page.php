<?php
// khai báo biến trong js 
// var a=1 
// khai báo biến trong php dùng $ 
// khai báo biến trong php
$a1 = 5;
echo $a1;
echo ('<br>');
$a1 = 9;
echo $a1;
// Hằng 
// const PI =3.14
echo ('<br>');
define('PI', 3.14);
// hằng là không có dấu $ , dấu $ chỉ dành cho biến 
echo PI;
echo ('<br>');
// các kiểu dữ liệu
//1. kiểu số number
$a2 = 10;
// 2. kiểu (string)
// dùng nháy đơn hoặc nháy đôi đều được 
$str1 = 'con vịt';
echo $str1;
echo ('<br>');
$str2 = 'con gà';
echo $str2;
echo ('<br>');
// nối chuỗi 
$str1 = 'con gà ';
$str2 = 'đang ăn thóc';
// Dấu.là nối chuỗi
$str3 = $str1 . '' . $str2;
echo $str3;
echo ('<br>');
$str4 = " $str1 $str2"; // con gà đang ăn thóc
echo $str4;
// phân biệt nháy đơn và nháy đôi khi nào sử dụng 
$a1 = 'con vit'; // đề xuất (nếu bên trong chuỗi không có biến )
$a2 = "con vịt "; // chạy chậm (performance thấp )
$a3 = 'con chó';
$a4 = "$a3 đang đi dạo "; // đề xuất dùng
echo ('<br>');
$a5 = '$3 đang đi dạo '; // không được dùng 
echo $a4;
echo ('<br>');
echo $a5;
// 3 kiểu dữ liệu luận lý boolean
$c = false;
// kiểu dữ liệu mảng (array -danh sách )
$arr1 = [4, true, 'con ga', 100];
// echo $arr1;
// arr không sử dụng được với echo
// arr được sử dụng vardum
var_dump($arr1);
echo ('<br>');
echo $arr1[2];
// tính tổng một mảng bằng vòng lặp for
$arr2 = [1, 2, 3, 4, 5];
$sum = 0;
// arr2.length của js (lấy số lượng phần tử trong    mảng array)
$size = count($arr2);
for ($i = 0; $i <= $size - 1; $i++) {
    $sum += $arr2[$i];
}
echo '<br>';
echo $sum;
var_dump($sum);