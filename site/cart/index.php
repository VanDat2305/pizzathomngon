<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
//-------------------------------//
extract($_REQUEST);

if (exist_param("form_invoice")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        extract($kh);
        $VIEW_NAME = "../cart/form_invoice.php";
    }else{
        header("location:".SITE_URL."tai_khoan/dang_nhap.php");
    }
} else {
    $VIEW_NAME = "../cart/cart.php";
}
require '../template.php';
