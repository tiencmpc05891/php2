<?php
include '../bai3/config.php';
function loadall_taikhoan()
{
    $sql = "SELECT * FROM khachhang ";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}


?>
