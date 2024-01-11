<?php
class TaiKhoan
{
    private $sodu;

    public function napTien($sotien)
    {
        $this->sodu += $sotien;
    }

    public function kiemtrasodu()
    {
        return $this->sodu;
    }
}
$taiKhoan = new TaiKhoan;
$taiKhoan->napTien(100000);
echo "Số dư: $" . $taiKhoan->kiemtrasodu() . "\n";

?>