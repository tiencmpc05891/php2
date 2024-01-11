<?php
namespace App;


use mysqli;

class Database
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "php2";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối có lỗi hay không
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Đã kết nối thành công ";
    }

    public function HelloWorld()
    {
        echo "Hello World";
    }
}
?>