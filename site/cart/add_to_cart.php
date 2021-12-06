<?php
require '../../global.php';
require '../../dao/category.php';
require '../../dao/product.php';
require '../../dao/extra_topping.php';

extract($_REQUEST);

if (isset($clear_cart) && $clear_cart == 1) {
    unset($_SESSION['cart']);
}
if (isset($option_id) && $option_id > 0) {
    $product = product_select_by_option_id($option_id);


    $total = 0;
    if (isset($extra_id) && $extra_id > 0) {

        $arr_extra = [];

        for ($i = 0; $i < count($extra_id); $i++) {

            $arr_extra[$i] = extra_select_by_id($extra_id[$i]);
        }
    }

    if (isset($_SESSION['cart'])) {

        if (isset($_SESSION['cart'][$option_id]['quantity'])) {

            // Nếu có biến $detail_quantity tức là khách có chọn số lượng ở trang chi tiết
            if (isset($detail_quantity) && $detail_quantity > 0) {
                $_SESSION['cart'][$option_id]['quantity'] += (int)$detail_quantity;
            } else {
                $_SESSION['cart'][$option_id]['quantity'] += 1;
            }
        } else {
            $_SESSION['cart'][$option_id]['quantity'] = 1;
        }

        $_SESSION['cart'][$option_id]['option_id'] = $product['option_id'];
        $_SESSION['cart'][$option_id]['discount'] = $product['discount'];
        $_SESSION['cart'][$option_id]['product_name'] = $product['product_name'];
        $_SESSION['cart'][$option_id]['option_name'] = $product['option_name'];
        $_SESSION['cart'][$option_id]['option_price'] = $product['option_price'];
        $_SESSION['cart'][$option_id]['product_image'] = $product['product_image'];

        // Extra topping
        if (isset($extra_id) && $extra_id > 0) {
            $_SESSION['cart'][$option_id]['extra_topping'] = $arr_extra;
        }
    } else {
        // Nếu có biến $detail_quantity tức là khách có chọn số lượng ở trang chi tiết
        if (isset($detail_quantity) && $detail_quantity > 0) {
            $_SESSION['cart'][$option_id]['quantity'] = (int)$detail_quantity;
        } else {
            $_SESSION['cart'][$option_id]['quantity'] = 1;
        }
        $_SESSION['cart'][$option_id]['option_id'] = $product['option_id'];
        $_SESSION['cart'][$option_id]['discount'] = $product['discount'];
        $_SESSION['cart'][$option_id]['product_name'] = $product['product_name'];
        $_SESSION['cart'][$option_id]['option_name'] = $product['option_name'];
        $_SESSION['cart'][$option_id]['option_price'] = $product['option_price'];
        $_SESSION['cart'][$option_id]['product_image'] = $product['product_image'];

        // Extra topping
        if (isset($extra_id) && $extra_id > 0) {
            $_SESSION['cart'][$option_id]['extra_topping'] = $arr_extra;
        }
        // foreach ($_SESSION['cart'] as $key => $value) {
        //     $total += $_SESSION['cart'][$key]['sl'];
        // }
        // echo $total;


    }
}
if (exist_param('option_remove_id')) {
    if (count($_SESSION['cart']) <= 1) {
        unset($_SESSION['cart']);
    } else {
        unset($_SESSION['cart'][$option_remove_id]);
    }
}
if (exist_param('cart_option_id')) {
    $_SESSION['cart'][$cart_option_id]['quantity'] = $cart_quantity;
}

// Tỉnh tổng sp trong cart
// for ($i = 0; $i < count($_SESSION['cart']); $i++) {
//     $_SESSION['cart']['total_quantity'] += $_SESSION['cart'][$i]['quantity'];
// }
