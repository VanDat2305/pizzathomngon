<?php
require '../../global.php';

require '../../dao/category.php';
require '../../dao/product.php';
require_once "../../dao/extra_topping.php";

//-------------------------------//


extract($_REQUEST);

$extras = extra_select_all_product();
$categories = category_select_all();

$max_price = product_select_max_price();
$min_price = product_select_min_price();



$options = option_select_all();
$top10_product = product_select_top10();

$products = product_category_select_all();


$VIEW_NAME = "product/product_ui.php";

require '../layout.php';



// echo "<pre>";
// var_dump($top10_product);
// die;
