<?php
namespace App\Model;

class Users
{
    public function loadall_taikhoan()
    {
        $database = new Database();
        $sql = "select * from taikhoan order by makhachhang desc";
        $listtaikhoan = $database->mysqli_query($sql);
        return $listtaikhoan;
    }
    // public function insert_taikhoan($email, $user, $pass)
    // {
    //     $database = new Database();
    //     $sql = "INSERT INTO taikhoan (email, user, pass) VALUES (?, ?, ?)";
    //     $database->mysqli_execute($sql, array($email, $user, $pass));
    // }
    //gốc ở trên


    public function insert_taikhoan($email, $user, $pass)
    {
        $database = new Database(); // Chắc chắn rằng bạn tạo đúng đối tượng Database ở đây
        $sql = "INSERT INTO taikhoan (email, user, pass) VALUES (?, ?, ?)";
        $database->mysqli_execute($sql, array($email, $user, $pass));
    }

    public function email_exists($email)
    {
        $database = new Database();
        $sql = "SELECT COUNT(*) FROM taikhoan WHERE email = ?";
        return $database->mysqli_query_value($sql, array($email)) > 0;
    }

    public function username_exists($username)
    {
        $database = new Database();
        $sql = "SELECT COUNT(*) FROM taikhoan WHERE user = ?";
        return $database->mysqli_query_value($sql, array($username)) > 0;
    }

    public function checkuser($user, $pass)
    {
        $database = new Database();
        $sql = "select * from taikhoan where user=? AND pass=?";
        $sp = $database->mysqli_query_one($sql, array($user, $pass));

        // Kiểm tra giá trị $role

        return $sp;
    }


    public function checkemail($email)
    {
        $database = new Database();
        $sql = "select * from taikhoan where email=?";
        $sp = $database->mysqli_query_one($sql, array($email));
        return $sp;
    }

    public function delete_taikhoan($id)
    {
        $database = new Database();
        $sql = "delete from taikhoan where makhachhang=?";
        $database->mysqli_execute($sql, array($id));
    }

    public function forget_pass($pass, $email)
    {
        $database = new Database();
        $sql = "UPDATE taikhoan SET pass = ? WHERE email = ?";
        $database->mysqli_execute($sql, array($pass, $email));
    }

    public function update_taikhoan($makhachhang, $user, $pass, $email, $diachi, $tel)
    {
        $database = new Database();
        $sql = "UPDATE taikhoan SET user=?, pass=?, email=?, address=?, tel=? WHERE makhachhang=?";
        $params = array($user, $pass, $email, $diachi, $tel, $makhachhang);
        $database->mysqli_execute($sql, $params);
    }

    public function loadone_taikhoan($makhachhang)
    {
        $database = new Database();
        $makhachhang = intval($makhachhang);
        if ($makhachhang <= 0) {
            return null;
        }

        $sql = "SELECT * FROM taikhoan WHERE makhachhang=?";
        $tk = $database->mysqli_query_one($sql, array($makhachhang));

        return $tk;
    }

    public function count_by_role($listtaikhoan)
    {
        $counts = array('role0' => 0, 'role1' => 0);

        foreach ($listtaikhoan as $taikhoan) {
            $role = 'role' . $taikhoan['role'];
            $counts[$role]++;
        }

        return $counts;
    }
}


