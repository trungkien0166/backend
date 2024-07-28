<?php
require '../config.php';
require '../connectDb.php';
$id = $_GET['id'];
session_start();
// kiểm tra sinh viên đã đăng kí môn học  chưa  ? 
$sql = "SELECT *FROM register WHERE student_id= $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // môn học đã đăng kí không thể xóa  ,không thể xóa 
    $_SESSION['error'] = 'Lỗi: Sinh viên đã đăng kí môn học , không thể xóa ';
    header('location:index.php');
    exit;
}
$sql = "DELETE FROM student WHERE id=$id";
if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã xóa môn học thành công';
    header('location: index.php');
    exit;
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location: index.php');
