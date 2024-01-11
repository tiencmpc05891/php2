<?php
class Tanjiro
{
    public $ten;

    public function skill()
    {
        echo $this->ten . "Thức Thứ Nhất : Thủy Diệt Trảm!\n";
    }
}

$tanjiro = new Tanjiro;
$tanjiro->ten = "Hơi Thở Của Nước : ";
$tanjiro->skill();

?>