<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Danh sách sinh viên</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "study_k68";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }
                mysqli_set_charset($conn, "utf8");

                $sql = "SELECT * FROM student";
                // $sql = "SELECT * FROM student WHERE id = 3 ";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    // false: false, 0, "", null
                    $order = 0;
                    while ($row = $result->fetch_assoc()) {
                        $order++;


                ?>
                <!-- php echo thay bằng dấu = -->
                <tr>
                    <td><?= $order ?></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['firstname'] ?></td>
                    <td><?= $row['lastname'] ?></td>
                    <td><?= $row['email'] ?></td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
</body>

</html>