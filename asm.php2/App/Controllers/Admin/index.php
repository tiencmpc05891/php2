<?php
session_start();
ob_start();

include "../../../App/Views/Admin/header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include "../../../App/Views/Admin/home.php";
            break;
        case 'listproducts':
           include "../../Views/Admin/products/listproducts.php";
            break;
        case 'listusers':
            include "../../Views/Admin/users/listusers.php";
            break;
        case 'listcategorys':
            include "../../Views/Admin/categorys/listcategorys.php";
            break;

        default:
            break;
    }
} else {
    include "../../../App/Views/Admin/home.php";
}
include "../../../App/Views/Admin/footer.php";
