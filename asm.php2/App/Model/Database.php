<?php

namespace App\Model;

use mysqli;

class Database
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "php2";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối có lỗi hay không
        if ($this->conn->connect_error) {
            die("Kết nối không thành công: " . $this->conn->connect_error);
        }
    }

    public function mysqli_execute($sql, $sql_args = [])
    {
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            die("Lỗi trong câu lệnh SQL: " . $this->conn->error);
        }

        if (!empty($sql_args)) {
            $types = str_repeat('s', count($sql_args));
            $stmt->bind_param($types, ...$sql_args);
        }

        $stmt->execute();
        $stmt->close();
    }
    



    public function mysqli_query($sql, $sql_args = [])
    {
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            die("Lỗi trong câu lệnh SQL: " . $this->conn->error);
        }

        if (!empty($sql_args)) {
            $types = str_repeat('s', count($sql_args));
            $stmt->bind_param($types, ...$sql_args);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $rows;
    }

    public function mysqli_query_one($sql, $sql_args = [])
    {
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            die("Lỗi trong câu lệnh SQL: " . $this->conn->error);
        }

        if (!empty($sql_args)) {
            $types = str_repeat('s', count($sql_args));
            $stmt->bind_param($types, ...$sql_args);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();

        return $row;
    }

    public function mysqli_query_value($sql, $sql_args = [])
    {
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            die("Lỗi trong câu lệnh SQL: " . $this->conn->error);
        }

        if (!empty($sql_args)) {
            $types = str_repeat('s', count($sql_args));
            $stmt->bind_param($types, ...$sql_args);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();

        return $row ? reset($row) : null;
    }
}
?>