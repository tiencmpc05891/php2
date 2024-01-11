<?php
class KyNang
{
    protected $skill;

    protected function skill()
    {
        echo "Tích Lịch Nhất Thiểm \n";
    }
}
class HoiTho extends KyNang
{
    public function setHoiTho($newHoiTho)
    {
        $this->skill = $newHoiTho;
    }

    public function name()
    {
        echo "Hơi Thở Sấm Sét : Thức thứ nhất -\n";
        $this->skill();
    }
}
$myZen = new HoiTho;
$myZen->setHoiTho(1);
$myZen->name();

?>