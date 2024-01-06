<?php

include 'model.php';

if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
    $email = $_POST["email"];
    $user = get_user($email);

    // Kiểm tra xem $user có tồn tại và là mảng không
    if ($user && is_array($user)) {
        // Hiển thị thông tin người dùng
        $kq = '<h1>Thông tin đăng nhập</h1>';
        $kq .= '<p>Họ: ' . $user['ho'] . '</p>';
        $kq .= '<p>Tên: ' . $user['ten'] . '</p>';
        $kq .= '<p>Email: ' . $user['email'] . '</p>';
        echo $kq;
    } else {
        // Hiển thị thông báo khi không tìm thấy thông tin người dùng
        echo '<p>Không tìm thấy thông tin cho email: ' . $email . '</p>';
    }
}
include 'view.php';
?>
