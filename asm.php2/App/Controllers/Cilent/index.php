<?php
session_start();
ob_start();

require "vendor/autoload.php";

include "App/Views/Client/header.php";

use App\Model\Database;
use App\Model\Users as tk;


$taikhoan = new tk;

$database = new Database();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
	$act = $_GET['act'];
	switch ($act) {
		case 'home':
			include "App/Views/Client/home.php";
			break;
		case 'shop':
			include "App/Views/Client/shop.php";
			break;
		case 'about':
			include "App/Views/Client/about.php";
			break;
		case 'blog':
			include "App/Views/Client/blog.php";
			break;
		case 'contact':
			include "App/Views/Client/contact.php";
			break;
		case 'detail':
			include "App/Views/Client/detail.php";
			break;
		case 'checkout':
			include "App/Views/Client/checkout.php";
			break;
		case 'cart':
			include "App/Views/Client/cart.php";
			break;
		case 'signin':
			if (isset($_POST["dangnhap"]) && $_POST["dangnhap"]) {
				$user = $_POST["user"];
				$pass = $_POST["pass"];

				if (empty($user) && empty($pass)) {
					$error_message = 'Vui lòng nhập tên đăng nhập và mật khẩu.';
				} elseif (empty($user)) {
					$error_message = 'Vui lòng nhập tên đăng nhập.';
				} elseif (empty($pass)) {
					$error_message = 'Vui lòng nhập mật khẩu.';
				} else {
					// Sử dụng class TaiKhoan và truyền đối tượng Database vào constructor

					$kq = $taikhoan->checkuser($user, $pass);

					if (is_array($kq) && (count($kq))) {
						$_SESSION['user'] = $kq;
						header('location: index.php');
						exit;
					} else {
						$error_message = "Tài khoản không tồn tại hoặc thông tin đăng nhập sai!";
					}
				}

				if (isset($error_message) && $error_message != "") {
					$_SESSION['tb_dangnhap'] = $error_message;
					header('location: index.php?act=dangnhap');
					exit;
				}
			}
			break;
		case 'dangnhap':
			include 'App/Views/Client/sign-in.php';
			break;
		case 'dangxuat':
			if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
				unset($_SESSION['user']);
			}
			header('Location: index.php');
			break;
		case 'signup':
			if (isset($_POST["dangky"]) && $_POST["dangky"]) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$email = $_POST['email'];

				$input_values = array('user' => $user, 'email' => $email);

				if (empty($user) || empty($pass) || empty($email)) {
					$error_message = 'Vui lòng nhập tên đăng nhập, mật khẩu hoặc email, nếu bạn để trống!';
				} elseif ($taikhoan->username_exists($user)) {
					$error_message = 'Tên đăng nhập đã được sử dụng. Vui lòng chọn tên khác.';
				} elseif (empty($pass)) {
					$error_message = 'Vui lòng nhập mật khẩu.';
				} elseif ($taikhoan->email_exists($email)) {
					$error_message = 'Email đã được sử dụng. Vui lòng sử dụng địa chỉ email khác.';
				} elseif (preg_match('/[^\p{L}\d\s]/u', $user)) {
					$error_message = 'Tên đăng nhập không được chứa ký tự đặc biệt.';
				} elseif (strlen($pass) < 4) {
					$error_message = 'Mật khẩu phải có ít nhất 4 ký tự.';
				} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$error_message = 'Địa chỉ email không hợp lệ.';
				} else {

					$taikhoan->insert_taikhoan($email, $user, $pass);


					$_SESSION['tb_dangky'] = 'Đăng ký thành công!';

					header('location: index.php?act=dangnhap');
					exit;
				}

				if (isset($error_message) && $error_message != "") {
					$_SESSION['tb_dangky'] = $error_message;
					$_SESSION['input_values'] = $input_values;
					header('location: index.php?act=dangky');
					exit;
				}
			}
			unset($_SESSION['input_values']);
			break;

		case 'dangky':
			include 'App/Views/Client/sign-up.php';
			break;
		default:
			break;
	}
} else {
	include "App/Views/Client/home.php";
}
include "App/Views/Client/footer.php";
