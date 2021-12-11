<?php

require_once "../../global.php";
require_once "../../dao/slider.php";
require_once "../../dao/category.php";
require_once "../../dao/product.php";
require_once "../../dao/extra_topping.php";
require_once "../../dao/blog.php";


if (exist_param("home")) {
    $VIEW_NAME = "home.php";
} else if (exist_param("product")) {

    header("location: " . SITE_URL . "product/product.php");
} else {
    $blog = blog_select_satus();
    $extras = extra_select_all_product();
    $options = option_select_all();
    $products = product_category_select_all();
    $categories = category_select_all();
    $slides = slide_select_all();
    $VIEW_NAME = "home.php";
}


// echo "<pre>";
// var_dump($pro);
// die;


require "../layout.php";
