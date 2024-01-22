<?php
namespace App\Model;

interface CrudInterface
{
    public function create();
    public function read();
    public function update();
    public function delete();
}

abstract class BaseModel implements CrudInterface
{

    public function create()
    {
        // Định nghĩa phương thức tạo (Create)
        echo "Tạo bản ghi </br>";
    }

    public function read()
    {
        // Định nghĩa phương thức đọc (Read)
        echo "Đọc bản ghi </br>";
    }

    public function update()
    {
        // Định nghĩa phương thức cập nhật (Update)
        echo "Cập nhật bản ghi </br>";
    }

    public function delete()
    {
        // Định nghĩa phương thức xóa (Delete)
        echo "Xóa bản ghi </br>";
    }
}

