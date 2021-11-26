<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/extra_topping.php';
require '../../dao/comment.php';
//-------------------------------//

extract($_REQUEST);

// echo "<pre>";
// var_dump($_REQUEST);
// die;


// Tăng số lượt xem lên 1
product_update_view($product_id);

if (exist_param("noi_dung")) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $ngay_bl = date_format(date_create(), 'Y-m-d');
    // binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating);
}




// Lấy list bình luận ra

// Truy vấn mặt hàng theo mã lấy nó ra để hiện thị
$product = product_select_by_id($product_id);
$gallery_image = gallery_select_by_pro_id($product_id);

$options = option_select_by_pro_id($product_id);

$extras = extra_select_all($product['category_id']);



// hàng cùng loại

$product_same = product__select_all_by_category($product['category_id']);
$option_product_same = option_select_all();


$VIEW_NAME = "product_detail_ui.php";
require '../layout.php';
