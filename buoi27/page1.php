<?php
session_start();
// thêm một phần tử  có key là success,giá trị là : Đã tạo.. thành công
$_SESSION['success'] = 'Đã tạo sinh viên thành công ';
$_SESSION['error'] = 'Đã tạo sinh viên thất bại ';
var_dump($_SESSION);
var_dump($_COOKIE);
echo session_id();
