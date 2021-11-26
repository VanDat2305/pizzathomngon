<?php

require_once "../../global.php";
require_once "../../dao/slider.php";
require_once "../../dao/category.php";
require_once "../../dao/product.php";
require_once "../../dao/extra_topping.php";


if (exist_param("gioi-thieu")) {
    $_SESSION['name_page'] = 'gioi_thieu';
    $VIEW_NAME = "home/gioi-thieu.php";
    //
} else if (exist_param("san-pham")) {

    $_SESSION['name_page'] = 'san_pham';
    header("location: " . SITE_URL . "/hang-hoa/liet-ke.php");
} else if (exist_param("bai-viet")) {

    $_SESSION['name_page'] = 'bai_viet';

    $VIEW_NAME = "home/bai-viet.php";
    //
} else if (exist_param("hoi-dap")) {
    $_SESSION['name_page'] = 'hoi_dap';
    $VIEW_NAME = "home/hoi-dap.php";
    //
} else {
    $_SESSION['name_page'] = 'home';
    $VIEW_NAME = "home/home.php";
}


// echo "<pre>";
// var_dump($pro);
// die;
$extras = extra_select_all_product();
$options = option_select_all();
$products = product_category_select_all();
$categories = category_select_all();
$slides = slide_select_all();

require "../layout.php";
