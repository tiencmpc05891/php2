<?php
namespace App\Model;
class ConcreteModel extends BaseModel
{
    // Các thuộc tính cụ thể của lớp con nếu cần
    private $specificProperty;

    public function __construct($specificProperty)
    {
        $this->specificProperty = $specificProperty;
    }

    // Các phương thức cụ thể của lớp con nếu cần
    public function getSpecificProperty()
    {
        return $this->specificProperty;
    }

    public function setSpecificProperty($value)
    {
        $this->specificProperty = $value;
    }

    // Các phương thức khác nếu cần
}
