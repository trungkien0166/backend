<?php
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study_k68";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");
echo "Kết nối thành công";

// * là tất cả các cột. Không ghi điều kiện WHERE là chọn tất cả các dòng
// Chọn 4 cột, 3 dòng

// $sql = "SELECT * FROM student WHERE id >= 3";
// ASC: tăng dần, DESC: giảm dần
// $sql = "SELECT * FROM student ORDER BY firstname DESC";
// 3 sinh viên/trang
// LIMIT start_index, item_per_page
// Trang 1
// $sql = "SELECT * FROM student LIMIT 0, 3";
// Trang 2
// $sql = "SELECT * FROM student LIMIT 3, 3";
// Trang 3
// $sql = "SELECT * FROM student LIMIT 6, 3";

// start_index = (page - 1) * item_per_page

// $sql = "SELECT * FROM student WHERE firstname LIKE '%h%'";
// $sql = "SELECT employee.*, department.name AS dept_name FROM employee JOIN department ON employee.dept_id=department.dept_id;";

$sql = "SELECT * FROM student";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // false: false, 0, "", null
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }
    // ...
} else {
    echo "0 results";
}

$conn->close();