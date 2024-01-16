<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-name" content="mono" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="../../../public/assets/admin/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="../../../public/assets/admin/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="../../../public/assets/admin/plugins/nprogress/nprogress.css" rel="stylesheet" />




  <link href="../../../public/assets/admin/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />


  <link href="../../../public/assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



  <link href="../../../public/assets/admin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



  <link href="../../../public/assets/admin/plugins/toaster/toastr.min.css" rel="stylesheet" />


  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="../../../public/assets/admin/css/style.css" />



  <!-- FAVICON -->
  
  <link href="../../../public/assets/admin/images/favicon.png" rel="shortcut icon" />
  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/nprogress/nprogress.js"></script>

</head>
<style>
  /* Custom styles for sidebar menu */
#sidebar-menu .sidenav-item-link {
    display: flex;
    align-items: center;
    padding: 12px;
    margin-bottom: 2px; /* Add spacing between menu items */
    transition: background-color 0.3s ease;
}

#sidebar-menu .sidenav-item-link:hover {
  background-color: rgb(253, 81, 144); /* Change the background color on hover */
}

#sidebar-menu .sidenav-item-link .mdi {
    margin-right: 10px; /* Add space between icon and text */
}

</style>

<body class="navbar-fixed sidebar-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>


  <div id="toaster"></div>


  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">


    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="index.php">
            <img src="../../../public/assets/admin/images/logo.png" alt="Mono">
            <span class="brand-name">MT SHOP.</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <!-- ... (Previous code remains unchanged) ... -->

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="active">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-view-dashboard"></i> <!-- Change the icon class to a suitable one -->
                <span class="nav-text">Trang chủ</span>
              </a>
            </li>
            <li class="active">
              <a class="sidenav-item-link" href="index.php?act=listcategorys">
                <i class="mdi mdi-view-list"></i> <!-- Change the icon class to a suitable one -->
                <span class="nav-text">Danh Mục</span>
              </a>
            </li>
            <li class="active">
              <a class="sidenav-item-link" href="index.php?act=listproducts">
                <i class="mdi mdi-package"></i> <!-- Change the icon class to a suitable one -->
                <span class="nav-text">Sản Phẩm</span>
              </a>
            </li>
            <li class="active">
              <a class="sidenav-item-link" href="index.php?act=listusers">
                <i class="mdi mdi-account"></i> <!-- Change the icon class to a suitable one -->
                <span class="nav-text">Tài Khoản</span>
              </a>
            </li>
          </ul>

          <!-- ... (Remaining code remains unchanged) ... -->

        </div>
        <!-- ... -->
      </div>

    </aside>



    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <span class="page-title">dashboard</span>

          <div class="navbar-right ">

            <!-- search form -->
            <div class="search-form">
              <form action="index.html" method="get">
                <div class="input-group input-group-sm" id="input-group-search">
                  <input type="text" autocomplete="off" name="query" id="search-input" class="form-control"
                    placeholder="Search..." />
                  <div class="input-group-append">
                    <button class="btn" type="button">/</button>
                  </div>
                </div>
              </form>
              <ul class="dropdown-menu dropdown-menu-search">

                <li class="nav-item">
                  <a class="nav-link" href="index.html">Morbi leo risus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Vestibulum at eros</a>
                </li>

              </ul>

            </div>

            <ul class="nav navbar-nav">
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off"
                  href="javascript:">
                  <i class="mdi mdi-contacts icon"></i>
                </a>
              </li>
              <li class="custom-dropdown">
                <button class="notify-toggler custom-dropdown-toggler">
                  <i class="mdi mdi-bell-outline icon"></i>
                  <span class="badge badge-xs rounded-circle">21</span>
                </button>
                <div class="dropdown-notify">


             
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="../../../public/assets/admin/images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block">MT SHOP.</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="user-profile.html">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="email-inbox.html">
                      <i class="mdi mdi-email-outline"></i>
                      <span class="nav-text">Message</span>
                      <span class="badge badge-pill badge-primary">24</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="user-activities.html">
                      <i class="mdi mdi-diamond-stone"></i>
                      <span class="nav-text">Activitise</span></a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="user-account-settings.html">
                      <i class="mdi mdi-settings"></i>
                      <span class="nav-text">Account Setting</span>
                    </a>
                  </li>

                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="/index.php"> <i class="mdi mdi-logout"></i>Quay lại cửa hàng
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>