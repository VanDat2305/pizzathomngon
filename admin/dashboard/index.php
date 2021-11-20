<?php
require_once "../../global.php";
require_once "../../dao/category.php";
require_once "../../dao/user.php";
require_once "../../dao/product.php";
require_once "../../dao/slider.php";

// extract($_REQUEST);
if (exist_param("btn_insert")) {
    
}else{
    
}
$amount_category = count(category_select_all());
$amount_user = count(user_select_all());
$amount_product = count(product_select_all());
$amount_slider = count(slide_select_all());
$VIEW_NAME = "view_dashboard.php";

require "../layout.php";

