<?php
require_once "../../global.php";
require_once "../../dao/category.php";
require_once "../../dao/user.php";
require_once "../../dao/product.php";
require_once "../../dao/slider.php";
require_once "../../dao/logo.php";
require_once "../../dao/coupon.php";
require_once "../../dao/contact.php";
require_once "../../dao/comment.php";
require_once "../../dao/extra_topping.php";
require_once "../../dao/feedback.php";
require_once "../../dao/order.php";


// extract($_REQUEST);
if (exist_param("btn_insert")) {
    
}else{
    
}
$amount_category = count(category_select_all());
$amount_user = count(user_select_all());
$amount_product = count(product_select_all());
$amount_slider = count(slide_select_all());
$amount_logo = count(logo_select_all());
$amount_coupon = count(coupon_select_all());
$amount_contact = count(contact_select_all());
$amount_comment = count(comment_select_all());
$amount_topping = count(extra_select_all_product());
$amount_order = count(order_select_all());
$amount_feedback = count(feedback_select_all());

$VIEW_NAME = "view_dashboard.php";

require "../layout.php";

