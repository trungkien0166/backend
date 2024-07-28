<?php require '../layout/header.php' ?>
<h1>Danh sách đăng ký môn học</h1>
<a href="create.php" class="btn btn-info">Add</a>
<?php
// $search = !empty($_GET['search']) ? $_GET['search'] : '';
$search = $_GET['search'] ?? '';
?>
<?php require '../layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên SV</th>
            <th>Mã MH</th>
            <th>Tên MH</th>
            <th>Điểm</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        require '../config.php';
        require '../connectDb.php';
        $sql = "SELECT register.*, student.name AS student_name, subject.name AS subject_name FROM register
        JOIN student ON student.id = register.student_id
        JOIN subject ON subject.id = register.subject_id
        ";
        if ($search) {
            // .= là nối chuỗi dồn (tương tự cộng dồn += )
            $sql .= " WHERE student.name LIKE '%$search%' OR subject.name LIKE '%$search%'";
            //SELECT * FROM subject WHERE name LIKE '%ty%';
        }
        $result = $conn->query($sql);
        $order = 0;
        if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :
                $order++;
        ?>
                <tr>
                    <td><?= $order ?></td>
                    <td><?= $row['student_id'] ?></td>
                    <td><?= $row['student_name'] ?></td>
                    <td><?= $row['subject_id'] ?></td>
                    <td><?= $row['subject_name'] ?></td>
                    <td><?= $row['score'] ?></td>
                    <td><a class="btn btn-warning btn-sm" href="edit.php?id=<?= $row['id'] ?>">Cập nhật điểm </a></td>
                    <td>

                        <!-- Button trigger modal -->
                        <button data-href="destroy.php?id=<?= $row['id'] ?>" type="button" class="btn btn-danger btn-sm destroy" data-toggle="modal" data-target="#exampleModal">
                            Xóa
                        </button>
                    </td>
                </tr>
            <?php endwhile ?>
        <?php endif ?>
    </tbody>
</table>
<div>
    <span>Số lượng: <?= $order ?></span>
</div>
<?php require '../layout/footer.php' ?>