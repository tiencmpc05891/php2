<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách Khách Hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Danh sách Khách Hàng</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                 
                    <th scope="col">Mã Khách Hàng</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ</th>
                    <th scope="col">Email</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Tên Đăng Nhập</th>
                    <th scope="col">Mật Khẩu</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($listtaikhoan)) {
                    foreach ($listtaikhoan as $index => $kh) {
                        echo "<tr>";
                        echo "<td>" . $kh['makhachhang'] . "</td>";
                        echo "<td>" . $kh['ten'] . "</td>";
                        echo "<td>" . $kh['ho'] . "</td>";
                        echo "<td>" . $kh['email'] . "</td>";
                        echo "<td>" . $kh['tel'] . "</td>";
                        echo "<td>" . $kh['user'] . "</td>";
                        echo "<td>" . $kh['pass'] . "</td>";
                        echo "<td>";
                        echo "<a href='edit.php?id=" . $kh['makhachhang'] . "' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Sửa</a>";
                        echo "<a href='delete.php?id=" . $kh['makhachhang'] . "' class='btn btn-danger btn-sm ms-1'><i class='fas fa-trash-alt'></i> Xóa</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>Không có dữ liệu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
