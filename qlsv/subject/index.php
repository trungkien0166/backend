<?php require '../layout/header.php' ?>
<h1>Danh sách môn học</h1>
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
            <th>Mã MH</th>
            <th>Tên</th>
            <th>Số tín chỉ</th>
            <th colspan="2">Tùy Chọn</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require '../config.php';
        require '../connectDb.php';
        $sql = "SELECT * FROM subject";
        if ($search) {
            // .= là nối chuỗi dồn (tương tự cộng dồn += )
            $sql .= " WHERE name LIKE '%$search%'";
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
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['number_of_credit'] ?></td>
                    <td><a class="btn btn-warning btn-sm" href="edit.php?id=<?= $row['id'] ?>">Sửa</a></td>
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