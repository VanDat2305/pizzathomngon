<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/extra_topping.php';
require '../../dao/user.php';
require '../../dao/order.php';
// $tong_tien = 0;
// foreach ($_SESSION['cart'] as $key => $value) {
//     $tong_tien +=  ($value['don_gia'] * $value['sl']) - ($value['don_gia'] * $value['sl'] * ($value['giam_gia'] / 100));
// }

extract($_REQUEST);



if (exist_param("btn_checkout")) {
    $created_at = date_format(date_create(), 'Y-m-d h:i:s');
    $coupon_discount = 0;
    $status_id = 1;
    $user_id = $_SESSION['user']['user_id'];

    try {
        $order_id  = order_insert($user_id, $fullname, $phoneNumber, $note, $address, $coupon_discount, $status_id, $created_at);
        if (isset($order_id)) {

            foreach ($_SESSION['cart'] as $key => $value) {
                $option_id = $_SESSION['cart'][$key]['option_id'];
                $quantity = $_SESSION['cart'][$key]['quantity'];
                $order_detail_id = order_detail_insert($option_id, $quantity, $order_id);


                if (isset($order_detail_id) && isset($_SESSION['cart'][$key]['extra_topping'])) {

                    foreach ($_SESSION['cart'][$key]['extra_topping'] as $key2 => $value2) {

                        $extra_id = $_SESSION['cart'][$key]['extra_topping'][$key2]['extra_id'];
                        extra_detail_insert($extra_id, $order_detail_id);
                    }
                }
            }
            unset($_SESSION['cart']);
        }
        $MESSAGE = "Thanh toán thành công. Cảm ơn bạn đã đặt hàng";
    } catch (Exception $exc) {
        $MESSAGE = "Thanh toán thất bại!";

        // }
    }
    echo "<script>alert('" . $MESSAGE . "'); location.href='" . SITE_URL . "cart/index.php'</script>";
} elseif (exist_param("form_checkout")) {
    extract($_SESSION['user']);
    $VIEW_NAME = 'checkout_ui.php';
}




require '../layout.php';


// echo "<script>alert('" . $MESSAGE . "'); location.href='" . SITE_URL . "cart/list_cart.php'</script>";
// header("location:" . SITE_URL . "cart/list_cart.php");
