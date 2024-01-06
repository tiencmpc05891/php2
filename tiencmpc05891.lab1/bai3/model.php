<?php
include 'config.php';

function get_user($email)
{
    $sql = "SELECT * FROM khachhang WHERE email = ?";
    $user = pdo_query_one($sql, array($email));
    return $user;
}


?>
