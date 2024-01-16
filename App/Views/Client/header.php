<?php

if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
    extract($_SESSION['user']);

    $html_account = '<a href="index.php?act=mytaikhoan"><button class="dropdown-item" type="button">Trang cá nhân :  ' . $user . '</button></a>
    <a href="index.php?act=edit_taikhoan"><button class="dropdown-item" type="button">Cập nhật thông tin</button></a>
    <a href="index.php?act=mybill"><button class="dropdown-item" type="button">Đơn hàng của tôi</button></a>';

    // Kiểm tra quyền của người dùng
    if ($role == 1) {
        $html_account .= '<a href="App/Controllers/Admin/index.php"><button class="dropdown-item" type="button">Đăng nhập Admin</button></a>';
    }

    $html_account .= '<a href="index.php?act=dangxuat"><button class="dropdown-item" type="button">Đăng xuất</button></a>';
} else {
    $html_account = '<a href="index.php?act=dangnhap"><button class="dropdown-item" type="button">Đăng nhập</button></a>
    <a href="index.php?act=dangky"><button class="dropdown-item" type="button">Đăng ký</button></a>';
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Thư viện Bootstrap CSS -->

    <title>Cửa Hàng Nội Thất </title>
</head>
<style>
    /* Adjustments for the navigation bar */
    .custom-navbar .nav-link {
        color: #ffffff;
        /* White text color */
        text-decoration: none;
    }

    /* Adjustments for the dropdown menu */
    .dropdown-menu {
        background-color: #343a40;
        /* Darker background color */
        border: none;
    }

    .dropdown-item {
        color: #ffffff;
        /* White text color */
        text-decoration: none;
        display: block;
        padding: 10px 15px;
    }

    /* Adjustments for the user icon button */
    .btn-light {
        background-color: #343a40;
        /* Darker background color */
        color: #ffffff;
        /* White text color */
        border: none;
    }

    .btn-light:hover {
        background-color: #212529;
        /* Darker background color on hover */
    }

    /* Adjustments for the cart icon */
    .nav-link img {
        width: 24px;
        /* Adjust the size of the cart icon */
    }

    /* Adjustments for the user icon */
    .btn-sm {
        font-size: 16px;
        /* Adjust the size of the user icon button */
    }
</style>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.php">MT Shop<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?act=home">Trang chủ</a>
                    </li>
                    <li><a class="nav-link" href="index.php?act=shop">Sản phẩm</a></li>
                    <li><a class="nav-link" href="index.php?act=about">Về chúng tôi</a></li>
                    <li><a class="nav-link" href="index.php?act=blog">Bài viết</a></li>
                    <li><a class="nav-link" href="index.php?act=contact">Liên hệ</a></li>

                </ul>

                <div class="d-inline-flex align-items-center">
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <?= isset($user) ? $user : '' ?>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right">
                            <?= $html_account; ?>
                        </div>


                    </div>
                
                            <li><a href="index.php?act=cart"><img src="images/cart.svg" alt=""></a></li>
                 
                </div>

            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

</body>

</html>