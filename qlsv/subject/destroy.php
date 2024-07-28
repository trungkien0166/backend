<?php
require '../config.php';
require '../connectDb.php';
$id = $_GET['id'];
session_start();
// kiểm tra sinh viên đã đăng kí môn học  chưa  ? 
$sql = "SELECT id FROM register WHERE subject_id= $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // môn học đã đăng kí không thể xóa  ,không thể xóa 
    $sql = "SELECT id name FROM subject WHERE id =$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $_SESSION['error'] = "Lỗi: Môn học $name (mã:$id) đã được đăng kí , không thể xóa ";
    header('location:index.php');
    exit;
}
$sql = "DELETE FROM subject WHERE id=$id";
if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã xóa môn học thành công';
    header('location: index.php');
    exit;
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location: index.php');