<?php
namespace App\Model;

interface CrudInterface {
    public function create();
    public function read();
    public function update();
    public function delete();
}

abstract class BaseModel implements CrudInterface {
    public function demo1() {
        echo "BaseModel </br>";
    }

    public function create() {
        // Định nghĩa phương thức tạo (Create)
        echo "Create record </br>";
    }

    public function read() {
        // Định nghĩa phương thức đọc (Read)
        echo "Read record </br>";
    }

    public function update() {
        // Định nghĩa phương thức cập nhật (Update)
        echo "Update record </br>";
    }

    public function delete() {
        // Định nghĩa phương thức xóa (Delete)
        echo "Delete record </br>";
    }
}

class ConcreteModel extends BaseModel {
    // Các thuộc tính cụ thể của lớp con nếu cần
    private $specificProperty;

    public function __construct($specificProperty) {
        $this->specificProperty = $specificProperty;
    }

    // Các phương thức cụ thể của lớp con nếu cần
    public function getSpecificProperty() {
        return $this->specificProperty;
    }

    public function setSpecificProperty($value) {
        $this->specificProperty = $value;
    }

    // Các phương thức khác nếu cần
}
