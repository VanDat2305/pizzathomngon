<?php
require '../../global.php';

require '../../dao/category.php';
require '../../dao/product.php';
require_once "../../dao/extra_topping.php";

//-------------------------------//


extract($_REQUEST);

if (exist_param("ma_loai")) {
} else if (exist_param("dac_biet")) {
} else if (exist_param("timkiem")) {
} else {
}
$extras = extra_select_all_product();
$categories = category_select_all();
$products = product_category_select_all();
$options = option_select_all();
$top10_product = product_select_top10();

// echo "<pre>";
// var_dump($top10_product);
// die;

$VIEW_NAME = "product/product_ui.php";

require '../layout.php';
