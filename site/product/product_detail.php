<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/extra_topping.php';
require '../../dao/comment.php';
//-------------------------------//

extract($_REQUEST);




// Tăng số lượt xem lên 1
product_update_view($product_id);




// Lấy list bình luận ra

// Truy vấn mặt hàng theo mã lấy nó ra để hiện thị
$product = product_select_by_id($product_id);

$gallery_image = gallery_select_by_pro_id($product_id);

$options = option_select_by_pro_id($product_id);


$extras = extra_select_all($product['category_id']);


// hàng cùng loại

$product_same = product__select_all_by_category($product['category_id'], $product['product_id']);


$option_product_same = option_select_all();

// echo "<pre>";
// var_dump($product_same);
// die;


$VIEW_NAME = "product_detail_ui.php";
require '../layout.php';
